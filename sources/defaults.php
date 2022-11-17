<?php

	$page_index=$deviceType=='phone' ? 20 : 20;

	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$logo = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logo_mobile=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo_mobile'));

	$bg_dangky=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg-dangky'));

	$logo_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo_footer'));

	$icon_GT =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_GT'));

	$icon_VIDEO =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_VIDEO'));

	$icon_QT =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_QT'));
	
	$icon_DK =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_TTTV'));

	$icon_KTXD =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_KTXD'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$socical = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi'));

	$congcu = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('tuvan'));

	$ketnoi = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('ketnoi'));

	$video = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_video where hienthi=1 and type=?",array('video'));

	$bg_footer =$db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$bg_duan =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg-duan'));

	$banner =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('banner'));

	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));

	// index

	$hotline= $db->rawQuery("select ten_$lang as ten,phone from #_map where hienthi=1 and type=? order by stt asc",array('hotline'));

	$footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('footer'));

	$maps = $db->rawQuery("select id,ten_$lang, diachi_$lang, phone, email,website,iframe_map from #_map where hienthi=1 order by stt asc,id desc limit 0,2");
	
	$list_c1 = $db->rawQuery("select id, ten_$lang as ten, photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and noibat=1 and type=? order by stt asc limit 0,2",array('san-pham'));
	
	$projects=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where type=?",array('dich-vu'));

	$baogia=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , mota_$lang as mota , type , photo from #_baiviet where type=?",array('bao-gia'));

	$service_c1=$db->rawQuery("select id, ten_$lang as ten, photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and noibat=1 and type=? order by stt asc",array('du-an'));

	$service_footer=$db->rawQuery("select id, ten_$lang as ten, photo ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc",array('du-an'));

	$taisao=$db->rawQuery("select id , ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=? limit 0,4",array('tai-sao'));

	$news=$db->rawQuery("select id , ten_$lang as ten , ngaytao ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=?",array('tin-tuc'));

	$introTop=$db->rawQuery("select ten_$lang as ten , number , photo_$lang as photo from #_photo where type=? order by stt asc limit 0,4",array('intro-top'));

	$quytrinh=$db->rawQuery("select id , ten_$lang as ten , mota_$lang as mota , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=? order by stt desc limit 0,5",array('quy-trinh'));

	$quytrinha=$db->rawQuery("select id , ten_$lang as ten , mota_$lang as mota , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where type=? order by stt asc limit 0,5",array('quy-trinh'));

	//Bộ lọc

	/* SEO QUY TRÌNH  */

	$seoqt = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array('quy-trinh'));

?>