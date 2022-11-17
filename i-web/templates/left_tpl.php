<nav class="sidebar-nav">

    <div class="sidebar-header">

        <div class="box" style="padding: 15px 0px 0px 0px;">

            <div class="logo-admin" style="text-align: center">

                <a href="index.php" title="logo"> <img src="images/logo.png" alt="" width="170"
                        <?=($config['logo']==true) ? 'class="none"':''?> /> </a>

            </div>

            <div class="line-admin">

                <span><i class="fas fa-globe"></i></span>

            </div>

        </div>

    </div>

    <ul class="metismenu" id="menu1">

        <li>

            <a class="home" href="index.php" title="Trang chủ">

                <i class="nav-icon text-sm fal fa-home"></i>Trang Chủ</a>

        </li>









        <li
            <?=($com=='info' && ($_GET['type']=='gioi-thieu' || $_GET['type']=='dieu-khoan' || $_GET['type']=='cua-hang-gan-ban') ) ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='info' && ($_GET['type']=='gioi-thieu' || $_GET['type']=='dieu-khoan' || $_GET['type']=='cua-hang-gan-ban') ) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Quản lý giới thiệu

            </a>

            <ul aria-expanded="<?=($com=='info' && ($_GET['type']=='gioi-thieu' || $_GET['type']=='khuyen-mai' || $_GET['type']=='cua-hang-gan-ban') ) ? 'true' : 'false' ?>"
                class="collapse <?=($com=='info' && ($_GET['type']=='gioi-thieu' || $_GET['type']=='khuyen-mai' || $_GET['type']=='cua-hang-gan-ban') ) ? 'in' : '' ?>"
                <?=($com=='info' && ($_GET['type']=='gioi-thieu' || $_GET['type']=='khuyen-mai' || $_GET['type']=='cua-hang-gan-ban') ) ? '' : 'style="height: 0px;"' ?>>

                <li <?=($com=='info' && $_GET['type']=='gioi-thieu') ? ' class="this"' : '' ?>><a
                        href="index.php?com=info&act=capnhat&type=gioi-thieu" title="">Giới thiệu</a></li>

            </ul>

        </li>

        <li <?=($com=='info' && ($_GET['type']=='hang-muc') ) ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='info' && ($_GET['type']=='hang-muc') ) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Quản lý Hạng mục

            </a>

            <ul aria-expanded="<?=($com=='info' && ($_GET['type']=='hang-muc' ) ) ? 'true' : 'false' ?>"
                class="collapse <?=($com=='info' && ($_GET['type']=='hang-muc') ) ? 'in' : '' ?>"
                <?=($com=='info' && ($_GET['type']=='hang-muc') ) ? '' : 'style="height: 0px;"' ?>>

                <li <?=($com=='info' && $_GET['type']=='hang-muc') ? ' class="this"' : '' ?>><a
                        href="index.php?com=info&act=capnhat&type=hang-muc" title="">Hạng mục</a></li>

            </ul>

        </li>
        <li class="<?=($com=='baiviet' && ($_GET['type']=='tac-gia')) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded=" <?=($com=='baiviet' && ($_GET['type']=='tac-gia')) ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i> Quản lý tác giả

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ($_GET['type']=='tac-gia')) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ($_GET['type']=='tac-gia')) ? "in" :""?>"
                <?=($com=='baiviet' && ($_GET['type']=='tac-gia')) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'tac-gia'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=tac-gia&page=1">Danh sách</a>

                </li>

            </ul>

        </li>

        <li <?=($com=='info' && ($_GET['type']=='video' ) ) ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='info' && ($_GET['type']=='video' ) ) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Quản lý VIDEO

            </a>

            <ul aria-expanded="<?=($com=='info' && ($_GET['type']=='video' ) ) ? 'true' : 'false' ?>"
                class="collapse <?=($com=='info' && ($_GET['type']=='video' ) ) ? 'in' : '' ?>"
                <?=($com=='info' && ($_GET['type']=='video' ) ) ? '' : 'style="height: 0px;"' ?>>

                <li <?=($com=='info' && $_GET['type']=='video') ? ' class="this"' : '' ?>><a
                        href="index.php?com=info&act=capnhat&type=video" title="">VIDEO</a></li>

            </ul>

        </li>



        <li class="<?=($com=='baiviet' && ($_GET['type']=='du-an')) ? "active" :""?>">
            <a class="has-arrow" href="#"
                aria-expanded=" <?=($com=='baiviet' && ($_GET['type']=='du-an')) ? "true" :"false"?>">
                <span>
                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý dự án
                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ($_GET['type']=='du-an')) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ($_GET['type']=='du-an')) ? "in" :""?>"
                <?=($com=='baiviet' && ($_GET['type']=='du-an')) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man_list' && 'du-an'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=du-an&page=1">Danh mục cấp 1</a>

                </li>

                <li class="<?=($com=='baiviet' && $act=='man' && 'du-an'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=du-an&page=1">Danh sách</a>

                </li>
            </ul>
        </li>

        <li class="<?=($com=='baiviet' && ($_GET['type']=='dich-vu')) ? "active" :""?>">
            <a class="has-arrow" href="#"
                aria-expanded=" <?=($com=='baiviet' && ($_GET['type']=='dich-vu')) ? "true" :"false"?>">
                <span>
                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý dịch vụ
                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ($_GET['type']=='dich-vu')) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ($_GET['type']=='dich-vu')) ? "in" :""?>"
                <?=($com=='baiviet' && ($_GET['type']=='dich-vu')) ? "" :"style='height: 0px;'"?>>



                <li class="<?=($com=='baiviet' && $act=='man' && 'dich-vu'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=dich-vu&page=1">Danh sách</a>

                </li>
            </ul>
        </li>

        <li class="<?=($com=='baiviet' && ($_GET['type']=='bao-gia')) ? "active" :""?>">
            <a class="has-arrow" href="#"
                aria-expanded=" <?=($com=='baiviet' && ($_GET['type']=='bao-gia')) ? "true" :"false"?>">
                <span>
                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý báo giá
                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ($_GET['type']=='bao-gia')) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ($_GET['type']=='bao-gia')) ? "in" :""?>"
                <?=($com=='baiviet' && ($_GET['type']=='bao-gia')) ? "" :"style='height: 0px;'"?>>



                <li class="<?=($com=='baiviet' && $act=='man' && 'bao-gia'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=bao-gia&page=1">Danh sách</a>

                </li>
            </ul>
        </li>


        <li class="<?=($com=='baiviet' && ($_GET['type']=='tai-sao')) ? "active" :""?>">
            <a class="has-arrow" href="#"
                aria-expanded=" <?=($com=='baiviet' && ($_GET['type']=='tai-sao')) ? "true" :"false"?>">
                <span>
                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý Tại Sao
                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ($_GET['type']=='tai-sao')) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ($_GET['type']=='tai-sao')) ? "in" :""?>"
                <?=($com=='baiviet' && ($_GET['type']=='tai-sao')) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'tai-sao'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=tai-sao&page=1">Danh sách</a>

                </li>
            </ul>
        </li>

        <li class="<?=($com=='baiviet' && ($_GET['type']=='quy-trinh')) ? "active" :""?>">
            <a class="has-arrow" href="#"
                aria-expanded=" <?=($com=='baiviet' && ($_GET['type']=='quy-trinh')) ? "true" :"false"?>">
                <span>
                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý Quy trình
                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ($_GET['type']=='quy-trinh')) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ($_GET['type']=='quy-trinh')) ? "in" :""?>"
                <?=($com=='baiviet' && ($_GET['type']=='quy-trinh')) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'quy-trinh'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=quy-trinh&page=1">Danh sách</a>

                </li>
            </ul>
        </li>


        <li
            class="<?=($com=='baiviet' && ('che-do-bao-hanh'==$_GET['type'] || 'cam-ket'==$_GET['type'] || 'ky-gui'==$_GET['type'] || 'danh-gia-khach-hang'==$_GET['type'] || 'anh-giao-dich'==$_GET['type'] || 'tuyen-dung'==$_GET['type'] ||  'tin-tuc'==$_GET['type'] || 'bo-suu-tap-qua-tang'==$_GET['type'] ||'cau-hoi-thuong-gap'==$_GET['type']    || 'he-thong-cua-hang'==$_GET['type'] || 'album-anh'==$_GET['type']  || 'y-kien'==$_GET['type'] || 'chinh-sach'==$_GET['type'] || 'chinh-sach'==$_GET['type'])) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='baiviet' && ('che-do-bao-hanh'==$_GET['type'] || 'cam-ket'==$_GET['type'] ||  'ky-gui'==$_GET['type'] || 'danh-gia-khach-hang'==$_GET['type'] || 'anh-giao-dich'==$_GET['type'] || 'tuyen-dung'==$_GET['type'] || 'tin-tuc'==$_GET['type'] || 'bo-suu-tap-qua-tang'==$_GET['type']  || 'cau-hoi-thuong-gap'==$_GET['type']  || 'he-thong-cua-hang'==$_GET['type'] || 'album-anh'==$_GET['type']  || 'ptgh'==$_GET['type'] || 'chinh-sach'==$_GET['type'])) ? "true" :"false"?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý bài viết chung

                </span>

            </a>

            <ul aria-expanded="<?=($com=='baiviet' && ('che-do-bao-hanh'==$_GET['type'] || 'cam-ket'==$_GET['type'] || 'tuyen-dung'==$_GET['type'] || 'danh-gia-khach-hang'==$_GET['type'] || 'anh-giao-dich'==$_GET['type'] || 'tin-tuc'==$_GET['type'] || 'bo-suu-tap-qua-tang'==$_GET['type'] || 'ky-gui'==$_GET['type']  || 'cau-hoi-thuong-gap'==$_GET['type']  || 'album-anh'==$_GET['type']  || 'he-thong-cua-hang'==$_GET['type'] || 'y-kien'==$_GET['type'] || 'chinh-sach'==$_GET['type'] || 'chinh-sach'==$_GET['type'])) ? "true" :"false"?>"
                class="collapse <?=($com=='baiviet' && ('che-do-bao-hanh'==$_GET['type'] || 'cam-ket'==$_GET['type'] || 'tuyen-dung'==$_GET['type'] || 'danh-gia-khach-hang'==$_GET['type'] || 'anh-giao-dich'==$_GET['type'] || 'tin-tuc'==$_GET['type'] || 'bo-suu-tap-qua-tang'==$_GET['type'] || 'ky-gui'==$_GET['type']  || 'cau-hoi-thuong-gap'==$_GET['type']  || 'album-anh'==$_GET['type']  || 'he-thong-cua-hang'==$_GET['type'] || 'y-kien'==$_GET['type'] || 'chinh-sach'==$_GET['type'] || 'chinh-sach'==$_GET['type'])) ? "in" :""?>"
                <?=($com=='baiviet' && ('che-do-bao-hanh'==$_GET['type'] || 'tuyen-dung'==$_GET['type'] || 'danh-gia-khach-hang'==$_GET['type'] || 'anh-giao-dich'==$_GET['type'] || 'tin-tuc'==$_GET['type'] || 'bo-suu-tap-qua-tang'==$_GET['type'] ||  'cam-ket'==$_GET['type'] || 'ky-gui'==$_GET['type']  || 'cau-hoi-thuong-gap'==$_GET['type'] || 'y-kien'==$_GET['type'] || 'album-anh'==$_GET['type']  || 'he-thong-cua-hang'==$_GET['type'] || 'chinh-sach'==$_GET['type'] || 'chinh-sach'==$_GET['type'])) ? "" :"style='height: 0px;'"?>>

                <li class="<?=($com=='baiviet' && $act=='man' && 'tin-tuc'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=tin-tuc&page=1">Tin tức</a>

                </li>

                <li class="<?=($com=='baiviet' && $act=='man' && 'chinh-sach'==$_GET['type']) ? "this" :""?>">

                    <a href="index.php?com=baiviet&act=man&type=chinh-sach&page=1">Chính sách</a>

                </li>

            </ul>

        </li>

        <li <?=($com=='photo' || $com=='video') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='photo' || $com=='video') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-images"></i>Slider - MXH

            </a>

            <ul aria-expanded="<?=($com=='photo' || $com=='video') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='photo' || $com=='video') ? 'in' : '' ?>"
                <?=($com=='photo' || $com=='video') ? '' : 'style="height: 0px;"' ?>>

                <li <?=($com=='photo' && $_GET['type']=='slider') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=slider&page=1" title="">Danh sách Slider</a>

                </li>

                <li <?=($com=='photo' && $_GET['type']=='mangxahoi') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=mangxahoi&page=1" title="">Danh sách mạng xã hội</a>

                </li>
                <li <?=($com=='photo' && $_GET['type']=='tuvan') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=tuvan&page=1" title="">Danh sách Công cụ Liên Hệ</a>

                </li>
                <li <?=($com=='photo' && $_GET['type']=='ketnoi') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=ketnoi&page=1" title="">Danh sách Công cụ Kết nối</a>

                </li>
                <li <?=($com=='photo' && $_GET['type']=='intro-top') ? ' class="this"' : '' ?>><a
                        href="index.php?com=photo&act=man&type=intro-top&page=1" title="">Thông số Kinh nghiệm</a>

                </li>



            </ul>

        </li>

        <?php  if(count($GLOBAL['bannerqc'])>0){?>

        <li <?=($com=='bannerqc') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='bannerqc') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Hình ảnh

            </a>

            <ul aria-expanded="<?=($com=='bannerqc') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='bannerqc') ? 'in' : '' ?>"
                <?=($com=='bannerqc') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['bannerqc'] as $key => $value){
                    
                        
                    ?>

                <li <?php if(isset($kiemtra)){if($func->checkPermissions('bannerqc','capnhat',$key)) echo 'class="none"'; }?>
                    <?php if($_GET['type']==$key) echo ' class="this"' ?>><a
                        href="index.php?com=bannerqc&act=capnhat&type=<?=$key?>" title=""><?=$value['title_main']?></a>

                </li>

                <?php }?>

            </ul>

        </li>

        <?php } ?>

        <li class="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "true" :"false"?>">

                <i class="nav-icon text-sm fal fa-id-card"></i>Liên hệ - tư vấn

            </a>

            <ul aria-expanded="<?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "true" :"false"?>"
                class="collapse <?=(($com=='contact' || $com=='booking' || $com=='newsletter') && $act=='man') ? "in" :""?>">

                <li <?php if($com=='contact' && $act=='man') echo ' class="this"' ?>><a
                        href="index.php?com=contact&act=man&type=contact" title="">Danh sách liên hệ</a></li>

                <li <?php if($com=='booking' && $act=='man' && $_GET["type"]=='client') echo ' class="this"' ?>><a
                        href="index.php?com=booking&act=man&type=client" title="">Đăng ký tư vấn</a></li>

                <li <?php if($com=='booking' && $act=='man' && $_GET["type"]=='yeu-cau') echo ' class="this"' ?>><a
                        href="index.php?com=booking&act=man&type=yeu-cau" title="">Yêu cầu gọi lại</a></li>


            </ul>

        </li>



        <li class="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "active" :""?>">

            <a class="has-arrow" href="#"
                aria-expanded="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "true" :"false"?>">

                <i class="nav-icon text-sm fal fa-share-alt"></i>Quản lý seo

            </a>

            <ul aria-expanded="<?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "true" :"false"?>"
                class="collapse <?=($com=='redirect' || ($com=='seopage'&& $act=='capnhat')) ? "in" :""?>">



                <?php foreach($setting['seopage']['page'] as $k => $v){?>



                <li <?php if( ($com=='seopage' && $act=='capnhat') && $type==$k) echo ' class="this"' ?>><a
                        href="index.html?com=seopage&act=capnhat&type=<?=$k?>" title=""><?=$v?></a></li>

                <?php }?>

                <li <?=($com=='redirect') ? ' class="this"' : '' ?>><a href="index.html?com=redirect&act=man" title="">

                        Redirect url

                    </a>

                </li>

            </ul>

        </li>



        <li <?=($com=='setting' || $com=='company') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($com=='setting' || $com=='company') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-cogs"></i>Cài đặt cấu hình

            </a>

            <ul aria-expanded="<?=($com=='setting' || $com=='company') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='setting' || $com=='company') ? 'in' : '' ?>"
                <?=($com=='setting' || $com=='company') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['company'] as $key =>$value){?>

                <li <?php if(isset($kiemtra)){if($func->checkPermissions('company','capnhat',$key)) echo 'class="none"'; }?>
                    <?=($com=='company' && $_GET['type']==$key) ? ' class="this"' : '' ?>><a
                        href="index.php?com=company&act=capnhat&type=<?=$key?>" title=""><?=$value['title_main']?></a>

                </li>

                <?php }?>
                <?php foreach($GLOBAL['map'] as $key => $value){?>
                <li <?=($com=='map' && $key == $_GET['type']) ? ' class="this"' : '' ?>>
                    <a href="index.html?com=map&act=man&type=<?=$key?>" title="">

                        <?= $value['title']?>

                    </a>

                </li>
                <?php }?>

                <li <?=($com=='setting') ? ' class="this"' : '' ?>><a href="index.php?com=setting&act=capnhat" title="">

                        <?=_cauhinhchung?>

                    </a>

                </li>

            </ul>

        </li>

        <?php if($GLOBAL_USER==true){?>

        <?php if($func->checkUserAdmin()){?>

        <li <?=($com=='user') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="fa<?=($com=='user') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-users-cog"></i>Tài khoản admin

            </a>

            <ul aria-expanded="<?=($com=='user') ? 'true' : 'false' ?>"
                class="collapse <?=($com=='user') ? 'in' : '' ?>" <?=($com=='user') ? '' : 'style="height: 0px;"' ?>>

                <?php if($GLOBAL_USER==true){?>

                <li <?php if($_GET['com']=='user' && $_GET['act']=='man') echo ' class="this"' ?>><a
                        href="index.php?com=user&act=man&type=user&page=1"><?=_account?></a></li>

                <?php }?>

            </ul>

        </li>

        <?php }?>

        <?php }?>

        <?php if($GLOBAL_LANG==true){?>

        <li <?=($_GET['com']=='ngonngu') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?=($_GET['com']=='ngonngu') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-language"></i> Hỗ trợ ngôn ngữ

            </a>

            <ul aria-expanded="<?=($_GET['com']=='ngonngu') ? 'true' : 'false' ?>"
                class="collapse <?=($_GET['com']=='ngonngu') ? 'in' : '' ?>"
                <?=($_GET['com']=='ngonngu') ? '' : 'style="height: 0px;"' ?>>

                <li <?php if($_GET['com']=='ngonngu' && $_GET['act']=='man_lang') echo ' class="this"' ?>><a
                        href="index.php?com=ngonngu&act=man_lang"><?=_ngonngu?></a></li>

            </ul>

        </li>

        <?php }?>

    </ul>

</nav>