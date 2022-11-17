<?php

/**
 * Created by PhpStorm.
 * User: DCV
 * Date: 18/06/2016
 * Time: 6:17 SA
 */
class SunClass
{
    //--------------------------------------------- THE SUN INFO -----------------------------------------------------
    private static function jdFromDate($dd, $mm, $yy)
    {
        $a = floor((14 - $mm) / 12);
        $y = $yy + 4800 - $a;
        $m = $mm + 12 * $a - 3;
        $jd = $dd + floor((153 * $m + 2) / 5) + 365 * $y + floor($y / 4) - floor($y / 100) + floor($y / 400) - 32045;
        if ($jd < 2299161) {
            $jd = $dd + floor((153 * $m + 2) / 5) + 365 * $y + floor($y / 4) - 32083;
        }
        return $jd;
    }

    private static function jdToDate($jd)
    {
        if ($jd > 2299160) { // After 5/10/1582, Gregorian calendar
            $a = $jd + 32044;
            $b = floor((4 * $a + 3) / 146097);
            $c = $a - floor(($b * 146097) / 4);
        } else {
            $b = 0;
            $c = $jd + 32082;
        }
        $d = floor((4 * $c + 3) / 1461);
        $e = $c - floor((1461 * $d) / 4);
        $m = floor((5 * $e + 2) / 153);
        $day = $e - floor((153 * $m + 2) / 5) + 1;
        $month = $m + 3 - 12 * floor($m / 10);
        $year = $b * 100 + $d - 4800 + floor($m / 10);
        //echo "day = $day, month = $month, year = $year\n";
        return array($day, $month, $year);
    }

    private static function getNewMoonDay($k, $timeZone)
    {
        $T = $k / 1236.85; // Time in Julian centuries from 1900 January 0.5
        $T2 = $T * $T;
        $T3 = $T2 * $T;
        $dr = M_PI / 180;
        $Jd1 = 2415020.75933 + 29.53058868 * $k + 0.0001178 * $T2 - 0.000000155 * $T3;
        $Jd1 = $Jd1 + 0.00033 * sin((166.56 + 132.87 * $T - 0.009173 * $T2) * $dr); // Mean new moon
        $M = 359.2242 + 29.10535608 * $k - 0.0000333 * $T2 - 0.00000347 * $T3; // Sun's mean anomaly
        $Mpr = 306.0253 + 385.81691806 * $k + 0.0107306 * $T2 + 0.00001236 * $T3; // Moon's mean anomaly
        $F = 21.2964 + 390.67050646 * $k - 0.0016528 * $T2 - 0.00000239 * $T3; // Moon's argument of latitude
        $C1 = (0.1734 - 0.000393 * $T) * sin($M * $dr) + 0.0021 * sin(2 * $dr * $M);
        $C1 = $C1 - 0.4068 * sin($Mpr * $dr) + 0.0161 * sin($dr * 2 * $Mpr);
        $C1 = $C1 - 0.0004 * sin($dr * 3 * $Mpr);
        $C1 = $C1 + 0.0104 * sin($dr * 2 * $F) - 0.0051 * sin($dr * ($M + $Mpr));
        $C1 = $C1 - 0.0074 * sin($dr * ($M - $Mpr)) + 0.0004 * sin($dr * (2 * $F + $M));
        $C1 = $C1 - 0.0004 * sin($dr * (2 * $F - $M)) - 0.0006 * sin($dr * (2 * $F + $Mpr));
        $C1 = $C1 + 0.0010 * sin($dr * (2 * $F - $Mpr)) + 0.0005 * sin($dr * (2 * $Mpr + $M));
        if ($T < -11) {
            $deltat = 0.001 + 0.000839 * $T + 0.0002261 * $T2 - 0.00000845 * $T3 - 0.000000081 * $T * $T3;
        } else {
            $deltat = -0.000278 + 0.000265 * $T + 0.000262 * $T2;
        };
        $JdNew = $Jd1 + $C1 - $deltat;
        //echo "JdNew = $JdNew\n";
        return floor($JdNew + 0.5 + $timeZone / 24);
    }

    private static function getSunLongitude($jdn, $timeZone)
    {
        $T = ($jdn - 2451545.5 - $timeZone / 24) / 36525; // Time in Julian centuries from 2000-01-01 12:00:00 GMT
        $T2 = $T * $T;
        $dr = M_PI / 180; // degree to radian
        $M = 357.52910 + 35999.05030 * $T - 0.0001559 * $T2 - 0.00000048 * $T * $T2; // mean anomaly, degree
        $L0 = 280.46645 + 36000.76983 * $T + 0.0003032 * $T2; // mean longitude, degree
        $DL = (1.914600 - 0.004817 * $T - 0.000014 * $T2) * sin($dr * $M);
        $DL = $DL + (0.019993 - 0.000101 * $T) * sin($dr * 2 * $M) + 0.000290 * sin($dr * 3 * $M);
        $L = $L0 + $DL; // true longitude, degree
        //echo "\ndr = $dr, M = $M, T = $T, DL = $DL, L = $L, L0 = $L0\n";
        // obtain apparent longitude by correcting for nutation and aberration
        $omega = 125.04 - 1934.136 * $T;
        $L = $L - 0.00569 - 0.00478 * sin($omega * $dr);
        $L = $L * $dr;
        $L = $L - M_PI * 2 * (floor($L / (M_PI * 2))); // Normalize to (0, 2*PI)
        return floor($L / M_PI * 6);
    }

    private static function getSunLongitude2($jdn)
    {
        //var T, T2, dr, M, L0, DL, lambda, theta, omega;
        $T = ($jdn - 2451545.0) / 36525; // Time in Julian centuries from 2000-01-01 12:00:00 GMT
        $T2 = $T * $T;
        $dr = pi() / 180; // degree to radian
        $M = 357.52910 + 35999.05030 * $T - 0.0001559 * $T2 - 0.00000048 * $T * $T2; // mean anomaly, degree
        $L0 = 280.46645 + 36000.76983 * $T + 0.0003032 * $T2; // mean longitude, degree
        $DL = (1.914600 - 0.004817 * $T - 0.000014 * $T2) * sin($dr * $M);
        $DL = $DL + (0.019993 - 0.000101 * $T) * sin($dr * 2 * $M) + 0.000290 * sin($dr * 3 * $M);
        $theta = $L0 + $DL; // true longitude, degree
        // obtain apparent longitude by correcting for nutation and aberration
        $omega = 125.04 - 1934.136 * $T;
        $lambda = $theta - 0.00569 - 0.00478 * sin($omega * $dr);
        // Convert to radians
        $lambda = $lambda * $dr;
        $lambda = $lambda - pi() * 2 * (floor($lambda / (pi() * 2))); // Normalize to (0, 2*PI)
        return $lambda;
    }

    private static function getLunarMonth11($yy, $timeZone)
    {
        $off = self::jdFromDate(31, 12, $yy) - 2415021;
        $k = floor($off / 29.530588853);
        $nm = self::getNewMoonDay($k, $timeZone);
        $sunLong = self::getSunLongitude($nm, $timeZone); // sun longitude at local midnight
        if ($sunLong >= 9) {
            $nm = self::getNewMoonDay($k - 1, $timeZone);
        }
        return $nm;
    }

    private static function getLeapMonthOffset($a11, $timeZone)
    {
        $k = floor(($a11 - 2415021.076998695) / 29.530588853 + 0.5);
        $last = 0;
        $i = 1; // We start with the month following lunar month 11
        $arc = self::getSunLongitude(self::getNewMoonDay($k + $i, $timeZone), $timeZone);
        do {
            $last = $arc;
            $i = $i + 1;
            $arc = self::getSunLongitude(self::getNewMoonDay($k + $i, $timeZone), $timeZone);
        } while ($arc != $last && $i < 14);
        return $i - 1;
    }

    /**
     * Kiểm tra xem năm dương có nhuận không?
     * @param null $yyyy
     * @return string
     */
    private static function isSolarYearLeap($yyyy = null)
    {
        if ($yyyy == null) {
            $yyyy = date('Y');
        }
        if ($yyyy % 4 == 0 || ($yyyy % 100 == 0 && $yyyy % 400 == 0)) {
            return 'Năm dương nhuận';
        } else {
            return 'Năm dương không nhuận';
        }
    }

    /**
     * Kiểm tra xem năm âm tương ứng có nhuận không?
     * @param null $yyyy
     * @return string
     */
    private static function isLunarYearLeap($yyyy = null)
    {
        if ($yyyy == null) {
            $yyyy = date('Y');
        }
        $arr = array(0, 3, 6, 9, 11, 14, 17);
        $leap = $yyyy % 19;
        if (in_array($leap, $arr)) {
            return 'Năm âm nhuận';
        } else {
            return 'Năm âm không nhuận';
        }
    }

    private static function getDayName($id)
    {
        $arr = array(
            'Sunday' => 'Chủ nhật',
            'Monday' => 'Thứ 2',
            'Tuesday' => 'Thứ 3',
            'Wednesday' => 'Thứ 4',
            'Thursday' => 'Thứ 5',
            'Friday' => 'Thứ 6',
            'Saturday' => 'Thứ 7'
        );
        if (array_key_exists($id, $arr)) {
            return $arr[$id];
        } else {
            return '';
        }
    }

    private static function getMonthName($id)
    {
        $arr2 = array('Tháng Giêng', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Chạp');
        return $arr2[$id];
    }

    private static function getListCan()
    {
        return array('Giáp', 'Ất', 'Bính', 'Đinh', 'Mậu', 'Kỷ', 'Canh', 'Tân', 'Nhâm', 'Quý');
    }

    private static function getListChi()
    {
        return array('Tý', 'Sửu', 'Dần', 'Mão', 'Thìn', 'Tỵ', 'Ngọ', 'Mùi', 'Thân', 'Dậu', 'Tuất', 'Hợi');
    }

    private static function getListCanMenh()
    {
        return array('Giáp'=>1, 'Ất'=>1, 'Bính'=>2, 'Đinh'=>2, 'Mậu'=>3, 'Kỷ'=>3, 'Canh'=>4, 'Tân'=>4, 'Nhâm'=>5, 'Quý'=>5);
    }

    private static function getListChiMenh()
    {
        return array('Tý'=>0, 'Sửu'=>0, 'Dần'=>1, 'Mão'=>1, 'Thìn'=>2, 'Tỵ'=>2, 'Ngọ'=>0, 'Mùi'=>0, 'Thân'=>1, 'Dậu'=>1, 'Tuất'=>2, 'Hợi'=>2);
    }

    private static function getListMenh()
    {
        return array(1=>'Kim', 2=>'Thủy', 3=>'Hỏa', 4=>'Thổ', 5=>'Mộc');
    }

    private static function getCanChiNam($nam)
    {
        $arrCan = self::getListCan();
        $arrChi = self::getListChi();
        $can = ($nam + 6) % 10;
        $chi = ($nam + 8) % 12;
        return 'Năm ' . $arrCan[$can] . ' ' . $arrChi[$chi];
    }

    private static function getCanChiMenhNam($nam)
    {
        $arrCan = self::getListCan();
        $arrChi = self::getListChi();
        $can = ($nam + 6) % 10;
        $chi = ($nam + 8) % 12;
        $t_can = $arrCan[$can];
        $t_chi = $arrChi[$chi];

        $getCanMenh = self::getListCanMenh();
        $getChiMenh = self::getListChiMenh();

        $sum = (int)$getCanMenh[$t_can] + (int)$getChiMenh[$t_chi];

        if($sum>5){
            $res = $sum - 5;
        }else{
            $res = $sum;
        }

        $getmenh = self::getListMenh();
        return $getmenh[$res];
    }

    private static function getCanChiThang($nam, $thang)
    {
        $arrCan = self::getListCan();
        $arrChi = self::getListChi();
        $can = ($nam * 12 + $thang + 3) % 10;
        $chi = ($thang + 1) % 12;
        return 'Tháng ' . $arrCan[$can] . ' ' . $arrChi[$chi];
    }

    private static function getCanChiNgay($jd)
    {
        $arrCan = self::getListCan();
        $arrChi = self::getListChi();
        $can = ($jd + 9) % 10;
        $chi = ($jd + 1) % 12;
        return 'Ngày ' . $arrCan[$can] . ' ' . $arrChi[$chi];
    }

    private static function getCanChiGio($jd)
    {
        $arrCan = self::getListCan();
        $arrChi = self::getListChi();
        $can = ($jd - 1) * 2 % 10;
        return 'Giờ ' . $arrCan[$can] . ' ' . $arrChi[0];
    }


    private static function getListTuongSinh()
    {
        return array('Kim' => 'Vàng, Nâu đất', 'Mộc' => 'Đen, Xanh nước', 'Thủy' => 'Trắng, Xám, Ghi', 'Hỏa' => 'Xanh lục', 'Thổ' => 'Đỏ, Hồng, Tím');
    }

    private static function getMauTuongSinh($nam)
    {
        $arrMenh = self::getCanChiMenhNam($nam);
        $arrMau = self::getListTuongSinh();
        
        return $arrMau[$arrMenh];
    }
    
    private static function getListHoaHop()
    {
        return array('Kim' => 'Trắng, Xám, Ghi', 'Mộc' => 'Xanh lục', 'Thủy' => 'Đen, Xanh nước', 'Hỏa' => 'Đỏ, Hồng, Tím', 'Thổ' => 'Vàng, Nâu đất');
    }

    private static function getMauHoaHop($nam)
    {
        $arrMenh = self::getCanChiMenhNam($nam);
        $arrMau = self::getListHoaHop();
        
        return $arrMau[$arrMenh];
    }

    private static function getListCheKhac()
    {
        return array('Kim' => 'Xanh lục', 'Mộc' => 'Vàng, Nâu đất', 'Thủy' => 'Đỏ, Hồng, Tím', 'Hỏa' => 'Trắng, Xám, Ghi', 'Thổ' => 'Đen, Xanh nước');
    }

    private static function getMauCheKhac($nam)
    {
        $arrMenh = self::getCanChiMenhNam($nam);
        $arrMau = self::getListCheKhac();
        
        return $arrMau[$arrMenh];
    }

    private static function getListBiKhac()
    {
        return array('Kim' => 'Đỏ, Hồng, Tím', 'Mộc' => 'Trắng, Xám, Ghi', 'Thủy' => 'Vàng, Nâu đất', 'Hỏa' => 'Đen, Xanh nước', 'Thổ' => 'Xanh lục');
    }
    private static function getMauBiKhac($nam)
    {
        $arrMenh = self::getCanChiMenhNam($nam);
        $arrMau = self::getListBiKhac();
        
        return $arrMau[$arrMenh];
    }

    private static function getListSaoNamGioi()
    {
        return array(1 => 'La Hầu (Polarstern)', 2 => 'Thổ Tú hay Thổ Tinh (Saturne)', 3 => 'Thủy Diệu hay Thủy Tinh (Mercure)', 4 => 'Thái Bạch hay Kim Tinh (Vénus)', 5 => 'Thái Dương hay Mặt Trời', 6 => 'Vân Hớn hay Hỏa Tinh (Mars)', 7 => 'Kế Đô (Neptune)', 8 => 'Thái Âm hay Mặt Trăng (Mond)', 9 => 'Mộc Đức hay Mộc Tinh (Jupiter)');
    }
    private static function getListSaoNuGioi()
    {
        return array(1 => 'Kế Đô (Neptune)', 2 => 'Vân Hớn hay Hỏa Tinh (Mars)', 3 => 'Mộc Đức hay Mộc Tinh (Jupiter)', 4 => 'Thái Âm hay Mặt Trăng (Mond)', 5 => 'Thổ Tú hay Thổ Tinh (Saturne)', 6 => 'La Hầu (Polarstern)', 7 => 'Thái Dương hay Mặt Trời', 8 => 'Thái Bạch hay Kim Tinh (Vénus)', 9 => 'Thủy Diệu hay Thủy Tinh (Mercure)');
    }

    /*
        $sex = 1: Nam giới, 0: Nữ giới
    */
    private static function getSaoChieuMenh($nam,$sex=1)
    {
        $current_year = date('Y');
        $your_year = $nam;
        $gioitinh = $sex;
        $age = $current_year - $your_year;
        // $arr_age = str_split($age);
        // $tong = array_sum($arr_age);
        $sao_nam_gioi = self::getListSaoNamGioi();
        $sao_nu_gioi = self::getListSaoNuGioi();
        $tong = $age;
        while ($tong > 9) {
            $tong = array_sum(str_split($tong));
        }
        if ($gioitinh == 1){
            return $sao_nam_gioi[$tong];
        }
        else{
            return $sao_nu_gioi[$tong];
        }
    }

    private static function getListMenhNguHanh()
    {
        return array('Giáp Tý' => 'Hải trung kim', 'Ất Sửu' => 'Hải trung kim', 'Bính Dần' => 'Lô trung hỏa', 'Đinh Mão' => 'Lô trung hỏa', 'Mậu Thìn' => 'Đại lâm mộc', 'Kỷ Tỵ' => 'Đại lâm mộc', 'Canh Ngọ' => 'Lộ bàng thổ', 'Tân Mùi' => 'Lộ bàng thổ', 'Nhâm Thân' => 'Kiếm phong kim', 'Quý Dậu' => 'Kiếm phong kim', 'Giáp Tuất' => 'Sơn đầu hỏa', 'Ất Hợi' => 'Sơn đầu hỏa', 'Bính Tý' => 'Giản hạ thủy', 'Đinh Sửu' => 'Giản hạ thủy', 'Mậu Dần' => 'Thành đầu thổ', 'Kỷ Mão' => 'Thành đầu thổ', 'Canh Thìn' => 'Bạch lạp kim', 'Tân Tỵ' => 'Bạch lạp kim', 'Nhâm Ngọ' => 'Dương liễu mộc', 'Quý Mùi' => 'Dương liễu mộc', 'Giáp Thân' => 'Tuyền trung thủy', 'Ất Dậu' => 'Tuyền trung thủy', 'Bính Tuất' => 'Ốc thượng thổ', 'Đinh Hợi' => 'Ốc thượng thổ', 'Mậu Tý' => 'Bích lôi hỏa', 'Kỷ Sửu' => 'Bích lôi hỏa', 'Canh Dần' => 'Tùng bách mộc', 'Tân Mão' => 'Tùng bách mộc', 'Nhâm Thìn' => 'Trường lưu thủy', 'Quý Tỵ' => 'Trường lưu thủy', 'Giáp Ngọ' => 'Sa trung kim', 'Ất Mùi' => 'Sa trung kim', 'Bính Thân' => 'Sơn hạ hỏa', 'Đinh Dậu' => 'Sơn hạ hỏa', 'Mậu Tuất' => 'Bình địa mộc', 'Kỷ Hợi' => 'Bình địa mộc', 'Canh Tý' => 'Bích thượng thổ', 'Tân Sửu' => 'Bích thượng thổ', 'Nhâm Dần' => 'Kim bạc kim', 'Quý Mão' => 'Kim bạc kim', 'Giáp Thìn' => 'Phú đăng hỏa', 'Ất Tỵ' => 'Phú đăng hỏa', 'Bính Ngọ' => 'Thiên hà thủy', 'Đinh Mùi' => 'Thiên hà thủy', 'Mậu Thân' => 'Đại dịch thổ', 'Kỷ Dậu' => 'Đại dịch thổ', 'Canh Tuất' => 'Thoa xuyến kim', 'Tân Hợi' => 'Thoa xuyến kim', 'Nhâm Tý' => 'Tang thạch mộc', 'Quý Sửu' => 'Tang thạch mộc', 'Giáp Dần' => 'Đại khê thủy', 'Ất Mão' => 'Đại khê thủy', 'Bính Thìn' => 'Sa trung thổ', 'Đinh Tỵ' => 'Sa trung thổ', 'Mậu Ngọ' => 'Thiên thượng hỏa', 'Kỷ Mùi' => 'Thiên thượng hỏa', 'Canh Thân' => 'Thạch Lựu mộc', 'Tân Dậu' => 'Thạch Lựu mộc', 'Nhâm Tuất' => 'Đại hải thủy', 'Quý Hợi' => 'Đại hải thủy');
    }

    private static function getMenhNguHanh($nam)
    {
        $arrCan = self::getListCan();
        $arrChi = self::getListChi();
        $can = ($nam + 6) % 10;
        $chi = ($nam + 8) % 12;
        $can_chi = $arrCan[$can] . ' ' . $arrChi[$chi];
        $arrNguHanh = self::getListMenhNguHanh();
        return $arrNguHanh[$can_chi];
    }

    private static function getTietKhi($jd)
    {
        $arr = array(
            'Xuân phân', 'Thanh minh', 'Cốc vũ', 'Lập hạ', 'Tiểu mãn', 'Mang chủng',
            'Hạ chí', 'Tiểu thử', 'Đại thử', 'Lập thu', 'Xử thử', 'Bạch lộ',
            'Thu phân', 'Hàn lộ', 'Sương giáng', 'Lập đông', 'Tiểu tuyết', 'Đại tuyết',
            'Đông chí', 'Tiểu hàn', 'Đại hàn', 'Lập xuân', 'Vũ thủy', 'Kinh trập'
        );
        $tietkhi = floor(self::getSunLongitude2($jd + 1 - 0.5 - 7.0 / 24.0) / pi() * 12);
        return $arr[$tietkhi];
    }

    private static function getHoangDao($id)
    {
        $arr = array("110100101100", "001101001011", "110011010010", "101100110100", "001011001101", "010010110011");
        return $arr[$id];
    }

    private static function getGioHoangDao($jd)
    {
        $chiOfDay = ($jd + 1) % 12;
        $gioHD = self::getHoangDao($chiOfDay % 6); // same values for Ty' (1) and Ngo. (6), for Suu and Mui etc.
        $ret = "";
        $count = 0;
        for ($i = 0; $i < 12; $i++) {
            $s = substr($gioHD, $i, 1);
            if ($s == '1') {
                $ex = self::getListChi();
                $ret .= $ex[$i];

                $ret .= ' (' . (($i * 2 + 23) % 24) . '-' . (($i * 2 + 1) % 24) . ')';
                if ($count++ < 5) $ret .= ', ';
                //if (count == 3) ret += '\n';
            }
        }
        return $ret;
    }

    private static function getSuKienNam($da, $ma)
    {
        $arr = array(
            '1_1' => 'Tết Nguyên Đán',
            '15_1' => 'Rằm Tháng Giêng',
            '10_3' => 'Giỗ Tổ Hùng Vương',
            '15_4' => 'Lễ Phật Đản',
            '5_5' => 'Tết Đoan Ngọ',
            '15_7' => 'Lễ Vu Lan',
            '15_8' => 'Tết Trung Thu',
            '23_12' => 'Ông Táo chầu trời'
        );

        if (array_key_exists($da . '_' . $ma, $arr)) {
            return $arr[$da . '_' . $ma];
        } else {
            return 'Ngày thường';
        }
    }

    private static function getDateSunInfo($dd, $mm, $yy)
    {
        return date_sun_info(strtotime($yy . '-' . $mm . '-' . $dd), 21.03, 105.85);
    }

    private static function getNewMoon($dd, $mm, $yy){
        $k = floor((self::jdFromDate($dd, $mm, $yy) - 2415021) / 29.530588853);
        $j = self::getNewMoonDay($k, 7.0);
        $arrDate = self::jdToDate($j);
        //
        $preDate = mktime(0, 0, 0, $arrDate[1], $arrDate[0] - 1, $arrDate[2]);
        return date('d/m/Y', $preDate);
    }

    private static function getEndOfMoon($timestamp){
        $synmonth = 29.53058868;
        $arrPhase = self::phasehunt($timestamp, $synmonth);
        $next_new_moon = $arrPhase[4];
        $preDate = mktime(0, 0, 0, date('m', $next_new_moon), date('d', $next_new_moon) - 1, date('Y', $next_new_moon));
        $preDate = self::convertSolar2Lunar(date('d', $preDate), date('m', $preDate), date('Y', $preDate));
        if(is_numeric($preDate)){
            return date('d', $preDate);
        }else{
            return null;
        }
    }

    /* Comvert solar date dd/mm/yyyy to the corresponding lunar date */
    public static function getArrayDateInfo($dd, $mm, $yy, $sex , $timeZone = 7.0)
    {
        $dayNumber = self::jdFromDate($dd, $mm, $yy);
        $k = floor(($dayNumber - 2415021.076998695) / 29.530588853);
        $monthStart = self::getNewMoonDay($k + 1, $timeZone);
        if ($monthStart > $dayNumber) {
            $monthStart = self::getNewMoonDay($k, $timeZone);
        }
        $a11 = self::getLunarMonth11($yy, $timeZone);
        $b11 = $a11;
        if ($a11 >= $monthStart) {
            $lunarYear = $yy;
            $a11 = self::getLunarMonth11($yy - 1, $timeZone);
        } else {
            $lunarYear = $yy + 1;
            $b11 = self::getLunarMonth11($yy + 1, $timeZone);
        }
        $lunarDay = $dayNumber - $monthStart + 1;
        $diff = floor(($monthStart - $a11) / 29);
        $lunarLeap = 0;
        $lunarMonth = $diff + 11;
        if ($b11 - $a11 > 365) {
            $leapMonthDiff = self::getLeapMonthOffset($a11, $timeZone);
            if ($diff >= $leapMonthDiff) {
                $lunarMonth = $diff + 10;
                if ($diff == $leapMonthDiff) {
                    $lunarLeap = 1;
                }
            }
        }
        if ($lunarMonth > 12) {
            $lunarMonth = $lunarMonth - 12;
        }
        if ($lunarMonth >= 11 && $diff < 4) {
            $lunarYear -= 1;
        }

        //
        $intDate = strtotime($yy . '-' . $mm . '-' . $dd);
        $dateSunInfo = self::getDateSunInfo($dd, $mm, $yy);
        $nhuan = ($lunarLeap == 1) ? 'Nhuận' : 'Không';
        $tenthang = (self::getEndOfMoon($intDate) == 30 ? 'Đủ' : 'Thiếu');
        $moon = self::getMoonTimes($dd, $mm, $yy, 21.03, 105.85);

        return array(
            'input_duong' => date('Y-m-d', $intDate),
            'output_am' => date('Y-m-d', strtotime($lunarYear . '-' . $lunarMonth . '-' . $lunarDay)),
            //'lunarLeap' => $lunarLeap,
            'thu_en' => date('l', $intDate),
            'thu_vi' => self::getDayName(date('l', $intDate)),
            'thang_am' => self::getMonthName($lunarMonth - 1),
            'thang_am_nhuan' => $nhuan,
            'thang_am_du_thieu' => $tenthang,
            'nam_duong_nhuan' => self::isSolarYearLeap($yy),
            'nam_am_nhuan' => self::isLunarYearLeap($yy),
            'can_chi_nam' => self::getCanChiNam($lunarYear),
            'can_chi_menh_nam' => self::getCanChiMenhNam($lunarYear),
            'can_chi_thang' => self::getCanChiThang($lunarYear, $lunarMonth),
            'can_chi_ngay' => self::getCanChiNgay(self::jdFromDate($dd, $mm, $yy)),
            'can_chi_gio' => self::getCanChiGio(self::jdFromDate($dd, $mm, $yy)),
            'sao_chieu_menh' => self::getSaoChieuMenh($lunarYear,$sex),
            'menh_ngu_hanh' => self::getMenhNguHanh($lunarYear),
            'mau_tuong_sinh' => self::getMauTuongSinh($lunarYear),
            'mau_hoa_hop' => self::getMauHoaHop($lunarYear),
            'mau_che_khac' => self::getMauCheKhac($lunarYear),
            'mau_bi_khac' => self::getMauBiKhac($lunarYear),
            'tiet_khi' => self::getTietKhi(self::jdFromDate($dd, $mm, $yy)),
            'day_info' => self::getSuKienNam($lunarDay, $lunarMonth),
            'hoang_dao' => self::getGioHoangDao(self::jdFromDate($dd, $mm, $yy)),
            'sun_info' => array(
                'sunrise' => date('H:i:s', $dateSunInfo['sunrise']),
                'transit' => date('H:i:s', $dateSunInfo['transit']),
                'sunset' => date('H:i:s', $dateSunInfo['sunset']),
                'sun_length' => gmdate('H:i:s', $dateSunInfo['sunset'] - $dateSunInfo['sunrise']),
                //'chang_vang_1' => date('H:i:s', $dateSunInfo['civil_twilight_begin']),
                //'chang_vang_2' => date('H:i:s', $dateSunInfo['civil_twilight_end']),
                //'chang_vang_hang_hai_1' => date('H:i:s', $dateSunInfo['nautical_twilight_begin']),
                //'chang_vang_hang_hai_2' => date('H:i:s', $dateSunInfo['nautical_twilight_end']),
                //'chang_vang_thien_van_1' => date('H:i:s', $dateSunInfo['astronomical_twilight_begin']),
                //'chang_vang_thien_van_2' => date('H:i:s', $dateSunInfo['astronomical_twilight_end'])
            ),
            'moon_info' => array(
                'moonrise' => date('H:i:s', $moon['moonrise']),
                'moonset' => date('H:i:s', $moon['moonset']),
                'moon_lenght' => gmdate('H:i:s', $moon['moonset'] - $moon['moonrise']),
                'moon_phase' => self::getMoonPhase($dd, $mm, $yy)
            ),
            'moon_cycle' => self::getMoonCycle($intDate)
        );
    }

    public static function convertSolar2Lunar($dd, $mm, $yy, $timeZone = 7.0)
    {
        $dayNumber = self::jdFromDate($dd, $mm, $yy);
        $k = floor(($dayNumber - 2415021.076998695) / 29.530588853);
        $monthStart = self::getNewMoonDay($k + 1, $timeZone);
        if ($monthStart > $dayNumber) {
            $monthStart = self::getNewMoonDay($k, $timeZone);
        }
        $a11 = self::getLunarMonth11($yy, $timeZone);
        $b11 = $a11;
        if ($a11 >= $monthStart) {
            $lunarYear = $yy;
            $a11 = self::getLunarMonth11($yy - 1, $timeZone);
        } else {
            $lunarYear = $yy + 1;
            $b11 = self::getLunarMonth11($yy + 1, $timeZone);
        }
        $lunarDay = $dayNumber - $monthStart + 1;
        $diff = floor(($monthStart - $a11) / 29);
        $lunarLeap = 0;
        $lunarMonth = $diff + 11;
        if ($b11 - $a11 > 365) {
            $leapMonthDiff = self::getLeapMonthOffset($a11, $timeZone);
            if ($diff >= $leapMonthDiff) {
                $lunarMonth = $diff + 10;
                if ($diff == $leapMonthDiff) {
                    $lunarLeap = 1;
                }
            }
        }
        if ($lunarMonth > 12) {
            $lunarMonth = $lunarMonth - 12;
        }
        if ($lunarMonth >= 11 && $diff < 4) {
            $lunarYear -= 1;
        }

        return strtotime($lunarYear . '-' . $lunarMonth . '-' . $lunarDay);
    }

    /* Convert a lunar date to the corresponding solar date */
    public static function convertLunar2Solar($lunarDay, $lunarMonth, $lunarYear, $lunarLeap, $timeZone = 7.0)
    {
        if ($lunarMonth < 11) {
            $a11 = self::getLunarMonth11($lunarYear - 1, $timeZone);
            $b11 = self::getLunarMonth11($lunarYear, $timeZone);
        } else {
            $a11 = self::getLunarMonth11($lunarYear, $timeZone);
            $b11 = self::getLunarMonth11($lunarYear + 1, $timeZone);
        }
        $k = floor(0.5 + ($a11 - 2415021.076998695) / 29.530588853);
        $off = $lunarMonth - 11;
        if ($off < 0) {
            $off += 12;
        }
        if ($b11 - $a11 > 365) {
            $leapOff = self::getLeapMonthOffset($a11, $timeZone);
            $leapMonth = $leapOff - 2;
            if ($leapMonth < 0) {
                $leapMonth += 12;
            }
            if ($lunarLeap != 0 && $lunarMonth != $leapMonth) {
                return array(0, 0, 0);
            } else if ($lunarLeap != 0 || $off >= $leapOff) {
                $off += 1;
            }
        }
        $monthStart = self::getNewMoonDay($k + $off, $timeZone);
        return self::jdToDate($monthStart + $lunarDay - 1);
    }

    //--------------------------------------------- THE MOON INFO -----------------------------------------------------
    /**
     * Calculates the moon rise/set for a given location and day of year
     */
    public static function getMoonTimes($day, $month, $year, $lat, $lon)
    {
        $utrise = $utset = 0;
        $timezone = (int)($lon / 15);
        $date = self::modifiedJulianDate($month, $day, $year);
        $date -= $timezone / 24;
        $latRad = deg2rad($lat);
        $sinho = 0.0023271056;
        $sglat = sin($latRad);
        $cglat = cos($latRad);

        $rise = false;
        $set = false;
        $above = false;
        $hour = 1;
        $ym = self::sinAlt($date, $hour - 1, $lon, $cglat, $sglat) - $sinho;

        $above = $ym > 0;
        while ($hour < 25 && (false == $set || false == $rise)) {
            $yz = self::sinAlt($date, $hour, $lon, $cglat, $sglat) - $sinho;
            $yp = self::sinAlt($date, $hour + 1, $lon, $cglat, $sglat) - $sinho;

            $quadout = self::quad($ym, $yz, $yp);
            $nz = $quadout[0];
            $z1 = $quadout[1];
            $z2 = $quadout[2];
            $xe = $quadout[3];
            $ye = $quadout[4];

            if ($nz == 1) {
                if ($ym < 0) {
                    $utrise = $hour + $z1;
                    $rise = true;
                } else {
                    $utset = $hour + $z1;
                    $set = true;
                }
            }

            if ($nz == 2) {
                if ($ye < 0) {
                    $utrise = $hour + $z2;
                    $utset = $hour + $z1;
                } else {
                    $utrise = $hour + $z1;
                    $utset = $hour + $z2;
                }
            }

            $ym = $yp;
            $hour += 2.0;
        }
        // Convert to unix timestamps and return as an array
        $utrise = self::convertTime($utrise);
        $utset = self::convertTime($utset);
        $moonrise = $rise ? mktime($utrise['hrs'], $utrise['min'], 0, $month, $day, $year) : mktime(0, 0, 0, $month, $day + 1, $year);
        $moonset = $set ? mktime($utset['hrs'], $utset['min'], 0, $month, $day, $year) : mktime(0, 0, 0, $month, $day + 1, $year);
        $retVal = array(
            'moonrise' => $moonrise,
            'moonset' => $moonset
        );
        return $retVal;
    }

    /**
     *    finds the parabola throuh the three points (-1,ym), (0,yz), (1, yp)
     *  and returns the coordinates of the max/min (if any) xe, ye
     *  the values of x where the parabola crosses zero (roots of the self::quadratic)
     *  and the number of roots (0, 1 or 2) within the interval [-1, 1]
     *
     *    well, this routine is producing sensible answers
     *
     *  results passed as array [nz, z1, z2, xe, ye]
     */
    private static function quad($ym, $yz, $yp)
    {
        $nz = $z1 = $z2 = 0;
        $a = 0.5 * ($ym + $yp) - $yz;
        $b = 0.5 * ($yp - $ym);
        $c = $yz;
        $xe = -$b / (2 * $a);
        $ye = ($a * $xe + $b) * $xe + $c;
        $dis = $b * $b - 4 * $a * $c;
        if ($dis > 0) {
            $dx = 0.5 * sqrt($dis) / abs($a);
            $z1 = $xe - $dx;
            $z2 = $xe + $dx;
            $nz = abs($z1) < 1 ? $nz + 1 : $nz;
            $nz = abs($z2) < 1 ? $nz + 1 : $nz;
            $z1 = $z1 < -1 ? $z2 : $z1;
        }

        return array($nz, $z1, $z2, $xe, $ye);
    }

    /**
     *    this rather mickey mouse function takes a lot of
     *  arguments and then returns the sine of the altitude of the moon
     */
    private static function sinAlt($mjd, $hour, $glon, $cglat, $sglat)
    {
        $mjd += $hour / 24;
        $t = ($mjd - 51544.5) / 36525;
        $objpos = self::minimoon($t);

        $ra = $objpos[1];
        $dec = $objpos[0];
        $decRad = deg2rad($dec);
        $tau = 15 * (self::lmst($mjd, $glon) - $ra);

        return $sglat * sin($decRad) + $cglat * cos($decRad) * cos(deg2rad($tau));
    }

    /**
     *    returns an angle in degrees in the range 0 to 360
     */
    private static function degRange($x)
    {
        $b = $x / 360;
        $a = 360 * ($b - (int)$b);
        $retVal = $a < 0 ? $a + 360 : $a;
        return $retVal;
    }

    private static function lmst($mjd, $glon)
    {
        $d = $mjd - 51544.5;
        $t = $d / 36525;
        $lst = self::degRange(280.46061839 + 360.98564736629 * $d + 0.000387933 * $t * $t - $t * $t * $t / 38710000);
        return $lst / 15 + $glon / 15;
    }

    /**
     * takes t and returns the geocentric ra and dec in an array mooneq
     * claimed good to 5' (angle) in ra and 1' in dec
     * tallies with another approximate method and with ICE for a couple of dates
     */
    private static function minimoon($t)
    {
        $p2 = 6.283185307;
        $arc = 206264.8062;
        $coseps = 0.91748;
        $sineps = 0.39778;

        $lo = self::frac(0.606433 + 1336.855225 * $t);
        $l = $p2 * self::frac(0.374897 + 1325.552410 * $t);
        $l2 = $l * 2;
        $ls = $p2 * self::frac(0.993133 + 99.997361 * $t);
        $d = $p2 * self::frac(0.827361 + 1236.853086 * $t);
        $d2 = $d * 2;
        $f = $p2 * self::frac(0.259086 + 1342.227825 * $t);
        $f2 = $f * 2;

        $sinls = sin($ls);
        $sinf2 = sin($f2);

        $dl = 22640 * sin($l);
        $dl += -4586 * sin($l - $d2);
        $dl += 2370 * sin($d2);
        $dl += 769 * sin($l2);
        $dl += -668 * $sinls;
        $dl += -412 * $sinf2;
        $dl += -212 * sin($l2 - $d2);
        $dl += -206 * sin($l + $ls - $d2);
        $dl += 192 * sin($l + $d2);
        $dl += -165 * sin($ls - $d2);
        $dl += -125 * sin($d);
        $dl += -110 * sin($l + $ls);
        $dl += 148 * sin($l - $ls);
        $dl += -55 * sin($f2 - $d2);

        $s = $f + ($dl + 412 * $sinf2 + 541 * $sinls) / $arc;
        $h = $f - $d2;
        $n = -526 * sin($h);
        $n += 44 * sin($l + $h);
        $n += -31 * sin(-$l + $h);
        $n += -23 * sin($ls + $h);
        $n += 11 * sin(-$ls + $h);
        $n += -25 * sin(-$l2 + $f);
        $n += 21 * sin(-$l + $f);

        $L_moon = $p2 * self::frac($lo + $dl / 1296000);
        $B_moon = (18520.0 * sin($s) + $n) / $arc;

        $cb = cos($B_moon);
        $x = $cb * cos($L_moon);
        $v = $cb * sin($L_moon);
        $w = sin($B_moon);
        $y = $coseps * $v - $sineps * $w;
        $z = $sineps * $v + $coseps * $w;
        $rho = sqrt(1 - $z * $z);
        $dec = (360 / $p2) * atan($z / $rho);
        $ra = (48 / $p2) * atan($y / ($x + $rho));
        $ra = $ra < 0 ? $ra + 24 : $ra;

        return array($dec, $ra);
    }

    /**
     *    returns the self::fractional part of x as used in self::minimoon and minisun
     */
    private static function frac($x)
    {
        $x -= (int)$x;
        return $x < 0 ? $x + 1 : $x;
    }

    /**
     * Takes the day, month, year and hours in the day and returns the
     * modified julian day number defined as mjd = jd - 2400000.5
     * checked OK for Greg era dates - 26th Dec 02
     */
    private static function modifiedJulianDate($month, $day, $year)
    {
        if ($month <= 2) {
            $month += 12;
            $year--;
        }

        $a = 10000 * $year + 100 * $month + $day;
        $b = 0;
        if ($a <= 15821004.1) {
            $b = -2 * (int)(($year + 4716) / 4) - 1179;
        } else {
            $b = (int)($year / 400) - (int)($year / 100) + (int)($year / 4);
        }

        $a = 365 * $year - 679004;
        return $a + $b + (int)(30.6001 * ($month + 1)) + $day;
    }

    /**
     * Converts an hours decimal to hours and minutes
     */
    private static function convertTime($hours)
    {
        $hrs = (int)($hours * 60 + 0.5) / 60.0;
        $h = (int)($hrs);
        $m = (int)(60 * ($hrs - $h) + 0.5);
        return array('hrs' => $h, 'min' => $m);
    }

    private static function getMoonPhase($day, $month, $year)
    {
        $date = strtotime($year.'-'.$month.'-'.$day);
        // calculate lunar phase (1900 - 2199)
        $year = date('Y', $date);
        $month = date('n', $date);
        $day = date('j', $date);
        if ($month < 4) {
            $year = $year - 1;
            $month = $month + 12;
        }
        $days_y = 365.25 * $year;
        $days_m = 30.42 * $month;
        $julian = $days_y + $days_m + $day - 694039.09;
        $julian = $julian / 29.53;
        $phase = intval($julian);
        $julian = $julian - $phase;
        $phase = round($julian * 8 + 0.5);
        if ($phase == 8) {
            $phase = 0;
        }
        //$phase_array = array('new', 'waxing crescent', 'first quarter', 'waxing gibbous', 'full', 'waning gibbous', 'last quarter', 'waning crescent');
        $phase_array = array(
            'Trăng mới',
            'Trăng lưỡi liềm đầu tháng',
            'Trăng bán nguyệt đầu tháng',
            'Trăng khuyết đầu tháng',
            'Trăng tròn',
            'Trăng khuyết cuối tháng',
            'Trăng bán nguyệt cuối tháng',
            'Trăng lưỡi liềm cuối tháng'
        );
        return $phase_array[$phase];
    }

    //--------------------------------------------- THE MOON INFO -----------------------------------------------------
    public static function getMoonCycle( $pdate = null ) {
        if( is_null( $pdate ) )
            $pdate = time();

        /*  Astronomical constants  */
        $epoch = 2444238.5;			// 1980 January 0.0

        /*  Constants defining the Sun's apparent orbit  */
        $elonge = 278.833540;		// Ecliptic longitude of the Sun at epoch 1980.0
        $elongp = 282.596403;		// Ecliptic longitude of the Sun at perigee
        $eccent = 0.016718;			// Eccentricity of Earth's orbit
        $sunsmax = 1.495985e8;		// Semi-major axis of Earth's orbit, km
        $sunangsiz = 0.533128;		// Sun's angular size, degrees, at semi-major axis distance

        /*  Elements of the Moon's orbit, epoch 1980.0  */
        $mmlong = 64.975464;		// Moon's mean longitude at the epoch
        $mmlongp = 349.383063;		// Mean longitude of the perigee at the epoch
        $mlnode = 151.950429;		// Mean longitude of the node at the epoch
        $minc = 5.145396;			// Inclination of the Moon's orbit
        $mecc = 0.054900;			// Eccentricity of the Moon's orbit
        $mangsiz = 0.5181;			// Moon's angular size at distance a from Earth
        $msmax = 384401;			// Semi-major axis of Moon's orbit in km
        $mparallax = 0.9507;		// Parallax at distance a from Earth
        $synmonth = 29.53058868;	// Synodic month (new Moon to new Moon)
        $lunatbase = 2423436.0;		// Base date for E. W. Brown's numbered series of lunations (1923 January 16)

        /*  Properties of the Earth  */
        // $earthrad = 6378.16;				// Radius of Earth in kilometres
        // $PI = 3.14159265358979323846;	// Assume not near black hole

        $timestamp = $pdate;
        // pdate is coming in as a UNIX timstamp, so convert it to Julian
        $pdate =  $pdate / 86400 + 2440587.5;

        /* Calculation of the Sun's position */
        $Day = $pdate - $epoch;								// Date within epoch
        $N = self::fixangle((360 / 365.2422) * $Day);		// Mean anomaly of the Sun
        $M = self::fixangle($N + $elonge - $elongp);		// Convert from perigee co-ordinates to epoch 1980.0
        $Ec = self::kepler($M, $eccent);					// Solve equation of Kepler
        $Ec = sqrt((1 + $eccent) / (1 - $eccent)) * tan($Ec / 2);
        $Ec = 2 * rad2deg(atan($Ec));						// True anomaly
        $Lambdasun = self::fixangle($Ec + $elongp);		// Sun's geocentric ecliptic longitude

        $F = ((1 + $eccent * cos(deg2rad($Ec))) / (1 - $eccent * $eccent));	// Orbital distance factor
        $SunDist = $sunsmax / $F;							// Distance to Sun in km
        $SunAng = $F * $sunangsiz;							// Sun's angular size in degrees

        /* Calculation of the Moon's position */
        $ml = self::fixangle(13.1763966 * $Day + $mmlong);				// Moon's mean longitude
        $MM = self::fixangle($ml - 0.1114041 * $Day - $mmlongp);		// Moon's mean anomaly
        $MN = self::fixangle($mlnode - 0.0529539 * $Day);				// Moon's ascending node mean longitude
        $Ev = 1.2739 * sin(deg2rad(2 * ($ml - $Lambdasun) - $MM));		// Evection
        $Ae = 0.1858 * sin(deg2rad($M));								// Annual equation
        $A3 = 0.37 * sin(deg2rad($M));									// Correction term
        $MmP = $MM + $Ev - $Ae - $A3;									// Corrected anomaly
        $mEc = 6.2886 * sin(deg2rad($MmP));								// Correction for the equation of the centre
        $A4 = 0.214 * sin(deg2rad(2 * $MmP));							// Another correction term
        $lP = $ml + $Ev + $mEc - $Ae + $A4;								// Corrected longitude
        $V = 0.6583 * sin(deg2rad(2 * ($lP - $Lambdasun)));				// Variation
        $lPP = $lP + $V;												// True longitude
        $NP = $MN - 0.16 * sin(deg2rad($M));							// Corrected longitude of the node
        $y = sin(deg2rad($lPP - $NP)) * cos(deg2rad($minc));			// Y inclination coordinate
        $x = cos(deg2rad($lPP - $NP));									// X inclination coordinate

        $Lambdamoon = rad2deg(atan2($y, $x)) + $NP;						// Ecliptic longitude
        $BetaM = rad2deg(asin(sin(deg2rad($lPP - $NP)) * sin(deg2rad($minc))));		// Ecliptic latitude

        /* Calculation of the phase of the Moon */
        $MoonAge = $lPP - $Lambdasun;									// Age of the Moon in degrees
        $MoonPhase = (1 - cos(deg2rad($MoonAge))) / 2;					// Phase of the Moon

        // Distance of moon from the centre of the Earth
        $MoonDist = ($msmax * (1 - $mecc * $mecc)) / (1 + $mecc * cos(deg2rad($MmP + $mEc)));

        $MoonDFrac = $MoonDist / $msmax;
        $MoonAng = $mangsiz / $MoonDFrac;								// Moon's angular diameter
        // $MoonPar = $mparallax / $MoonDFrac;							// Moon's parallax

        // store results
        $phase = self::fixangle($MoonAge) / 360;
        $result = array(
            //'phase' => $phase,
            //'illum' => $MoonPhase,
            'illum_percent' => round($MoonPhase*100, 2),
            'age' => $synmonth * $phase,
            'dist' => $MoonDist,
            //'angdia' => $MoonAng,
            'sundist' => $SunDist,
            //'sunangdia' => $SunAng,
            'new_moon' => self::get_phase(0, $timestamp, $synmonth),
            'first_quarter' => self::get_phase(1, $timestamp, $synmonth),
            'full_moon' => self::get_phase(2, $timestamp, $synmonth),
            'last_quarter' => self::get_phase(3, $timestamp, $synmonth),
            'next_new_moon' => self::get_phase(4, $timestamp, $synmonth),
            'next_first_quarter' => self::get_phase(5, $timestamp, $synmonth),
            'next_full_moon' => self::get_phase(6, $timestamp, $synmonth),
            'next_last_quarter' => self::get_phase(7, $timestamp, $synmonth)
        );
        return $result;
    }

    private static function fixangle($a) {
        return ( $a - 360 * floor($a / 360) );
    }

    //  KEPLER  --   Solve the equation of Kepler.
    private static function kepler($m, $ecc) {
        $epsilon = 0.000001;	// 1E-6
        $e = $m = deg2rad($m);
        do {
            $delta = $e - $ecc * sin($e) - $m;
            $e -= $delta / ( 1 - $ecc * cos($e) );
        }
        while ( abs($delta) > $epsilon );
        return $e;
    }

    /*  Calculates  time  of  the mean new Moon for a given
        base date.  This argument K to this function is the
        precomputed synodic month index, given by:
            K = (year - 1900) * 12.3685
        where year is expressed as a year and fractional year.
    */
    private static function meanphase($sdate, $k, $synmonth){
        // Time in Julian centuries from 1900 January 0.5
        $t = ( $sdate - 2415020.0 ) / 36525;
        $t2 = $t * $t;
        $t3 = $t2 * $t;

        $nt1 = 2415020.75933 + $synmonth * $k
            + 0.0001178 * $t2
            - 0.000000155 * $t3
            + 0.00033 * sin( deg2rad( 166.56 + 132.87 * $t - 0.009173 * $t2 ) );

        return $nt1;
    }

    /*  Given a K value used to determine the mean phase of
        the new moon, and a phase selector (0.0, 0.25, 0.5,
        0.75), obtain the true, corrected phase time.
    */
    private static function truephase($k, $phase, $synmonth){
        $apcor = false;

        $k += $phase;				// Add phase to new moon time
        $t = $k / 1236.85;			// Time in Julian centuries from 1900 January 0.5
        $t2 = $t * $t;				// Square for frequent use
        $t3 = $t2 * $t;				// Cube for frequent use
        $pt = 2415020.75933			// Mean time of phase
            + $synmonth * $k
            + 0.0001178 * $t2
            - 0.000000155 * $t3
            + 0.00033 * sin( deg2rad( 166.56 + 132.87 * $t - 0.009173 * $t2 ) );

        $m = 359.2242 + 29.10535608 * $k - 0.0000333 * $t2 - 0.00000347 * $t3;			// Sun's mean anomaly
        $mprime = 306.0253 + 385.81691806 * $k + 0.0107306 * $t2 + 0.00001236 * $t3;	// Moon's mean anomaly
        $f = 21.2964 + 390.67050646 * $k - 0.0016528 * $t2 - 0.00000239 * $t3;			// Moon's argument of latitude
        if ( $phase < 0.01 || abs( $phase - 0.5 ) < 0.01 ) {
            // Corrections for New and Full Moon
            $pt +=  (0.1734 - 0.000393 * $t) * sin( deg2rad( $m ) )
                + 0.0021 * sin( deg2rad( 2 * $m ) )
                - 0.4068 * sin( deg2rad( $mprime ) )
                + 0.0161 * sin( deg2rad( 2 * $mprime) )
                - 0.0004 * sin( deg2rad( 3 * $mprime ) )
                + 0.0104 * sin( deg2rad( 2 * $f ) )
                - 0.0051 * sin( deg2rad( $m + $mprime ) )
                - 0.0074 * sin( deg2rad( $m - $mprime ) )
                + 0.0004 * sin( deg2rad( 2 * $f + $m ) )
                - 0.0004 * sin( deg2rad( 2 * $f - $m ) )
                - 0.0006 * sin( deg2rad( 2 * $f + $mprime ) )
                + 0.0010 * sin( deg2rad( 2 * $f - $mprime ) )
                + 0.0005 * sin( deg2rad( $m + 2 * $mprime ) );
            $apcor = true;
        } else if ( abs( $phase - 0.25 ) < 0.01 || abs( $phase - 0.75 ) < 0.01 ) {
            $pt +=  (0.1721 - 0.0004 * $t) * sin( deg2rad( $m ) )
                + 0.0021 * sin( deg2rad( 2 * $m ) )
                - 0.6280 * sin( deg2rad( $mprime ) )
                + 0.0089 * sin( deg2rad( 2 * $mprime) )
                - 0.0004 * sin( deg2rad( 3 * $mprime ) )
                + 0.0079 * sin( deg2rad( 2 * $f ) )
                - 0.0119 * sin( deg2rad( $m + $mprime ) )
                - 0.0047 * sin( deg2rad ( $m - $mprime ) )
                + 0.0003 * sin( deg2rad( 2 * $f + $m ) )
                - 0.0004 * sin( deg2rad( 2 * $f - $m ) )
                - 0.0006 * sin( deg2rad( 2 * $f + $mprime ) )
                + 0.0021 * sin( deg2rad( 2 * $f - $mprime ) )
                + 0.0003 * sin( deg2rad( $m + 2 * $mprime ) )
                + 0.0004 * sin( deg2rad( $m - 2 * $mprime ) )
                - 0.0003 * sin( deg2rad( 2 * $m + $mprime ) );
            if ( $phase < 0.5 )		// First quarter correction
                $pt += 0.0028 - 0.0004 * cos( deg2rad( $m ) ) + 0.0003 * cos( deg2rad( $mprime ) );
            else	// Last quarter correction
                $pt += -0.0028 + 0.0004 * cos( deg2rad( $m ) ) - 0.0003 * cos( deg2rad( $mprime ) );
            $apcor = true;
        }
        if (!$apcor)	// function was called with an invalid phase selector
            return false;

        return $pt;
    }

    /* 	Find time of phases of the moon which surround the current date.
        Five phases are found, starting and
        ending with the new moons which bound the  current lunation.
    */
    private static function phasehunt($timestamp, $synmonth) {
        $sdate = self::utctojulian($timestamp );
        $adate = $sdate - 45;
        $ats = $timestamp - 86400 * 45;
        $yy = (int) gmdate( 'Y', $ats );
        $mm = (int) gmdate( 'n', $ats );

        $k1 = floor( ( $yy + ( ( $mm - 1 ) * ( 1 / 12 ) ) - 1900 ) * 12.3685 );
        $adate = $nt1 = self::meanphase( $adate, $k1, $synmonth);

        while (true) {
            $adate += $synmonth;
            $k2 = $k1 + 1;
            $nt2 = self::meanphase( $adate, $k2, $synmonth);
            // if nt2 is close to sdate, then mean phase isn't good enough, we have to be more accurate
            if( abs( $nt2 - $sdate ) < 0.75 )
                $nt2 = self::truephase( $k2, 0.0, $synmonth);
            if ( $nt1 <= $sdate && $nt2 > $sdate )
                break;
            $nt1 = $nt2;
            $k1 = $k2;
        }

        // results in Julian dates
        $data = array(
            self::truephase( $k1, 0.0, $synmonth),
            self::truephase( $k1, 0.25, $synmonth),
            self::truephase( $k1, 0.5, $synmonth),
            self::truephase( $k1, 0.75, $synmonth),
            self::truephase( $k2, 0.0, $synmonth),
            self::truephase( $k2, 0.25, $synmonth),
            self::truephase( $k2, 0.5, $synmonth),
            self::truephase( $k2, 0.75, $synmonth)
        );

        $quarters = array();
        foreach( $data as $v ){
            $quarters[] = ( $v - 2440587.5 ) * 86400;	// convert to UNIX time
        }
        return $quarters;
    }

    /*  Convert UNIX timestamp to astronomical Julian time (i.e. Julian date plus day fraction).  */
    private static function utctojulian( $ts ) {
        return $ts / 86400 + 2440587.5;
    }

    private static function get_phase($n, $timestamp, $synmonth ) {
        $arrPhase = self::phasehunt($timestamp, $synmonth);
        return date('d/m/Y', $arrPhase[$n]);
    }
}

/*echo '<meta charset="UTF-8">';
$d_x = SunClass::getArrayDateInfo(8, 7, 1991, 1);
echo '<pre>';
print_r($d_x);
echo '</pre>';


$new = new SunClass();
echo '<pre>';
print_r($new->convertLunar2Solar(27,5,1991));
echo '</pre>';*/
