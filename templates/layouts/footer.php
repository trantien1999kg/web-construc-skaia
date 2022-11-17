<?php 
$aboutfooter=$db->rawQueryOne("select id , ten_$lang as ten, mota_$lang as mota , type ,photo from #_info where type=? limit 0,1",array('gioi-thieu'));

?>

<footer class="section__footer pt40mobile pt100"
    style="background:url('<?=_upload_hinhanh_l.$bg_footer["photo_".$lang]?>') no-repeat center center/cover">

    <div class="container">
        <div class="box__first__footer pb0mobile pb35">
            <div class="row justify-content-between">
                <div class="item col-4 l-4 m-4 c-12 pt100">

                    <div class="title__first">

                        <div class="title_1">CÔNG TY TNHH TƯ VẤN KTXD</div>
                        <div class="title_2">SKAIA STUDIO</div>
                        <div class="desc_footer_top mt20">
                            <?=htmlspecialchars_decode($footer["mota"])?>
                        </div>

                    </div>

                </div>
                <div class="item pt40mobile pb40mobile col-5 l-5 m-5 c-12">

                    <div class="box_logo_footer">

                        <a href="" rel="dofollow" title="SKAIA STUDIO" class="d-block ratio-img" img-width="286"
                            img-height="153">
                            <img class="ratio-img__content objec-scale img-scale"
                                src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_hinhanh_l.$logo_footer['photo']?>" alt="SKAIA STUDIO"
                                <?=$func->errorImg()?>>
                        </a>

                    </div>
                    <div class="desc_footer_top line-3 mt30">
                        <?= htmlspecialchars_decode($aboutfooter["mota"])?>
                    </div>
                </div>
                <div class="item col-3 l-3 m-3 c-12 pt100 pl70">

                    <div class="title__footer">
                        <span class="title_span_footer">KẾT NỐI VỚI CHÚNG TÔI</span>
                    </div>
                    <div class="mt25">
                        <?php foreach($ketnoi as $v){?>
                        <div class="conect_social">
                            <div class="box_img_conect_social">
                                <a href="<?=$v["link"]?>" rel="dofollow" title="<?=$v["ten"]?>" class="d-block ratio-img"
                                    img-width="19" img-height="19">
                                    <img class="ratio-img__content objec-scale img-scale"
                                        src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>
                                </a>
                            </div>
                            <div class="box_name_conect_social pl10">
                                <?=$v["ten"]?>
                            </div>

                        </div>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 p-relative">
            <span class="border_footer"> </span>
        </div>
        <div class="box__first__footer pt0mobile pt25">
            <div class="row justify-content-between">
                <div class="item  pt40mobile col-3 l-3 m-3 c-12">
                    <div class="title__footer">
                        <span class="title_span_footer">DỰ ÁN</span>
                    </div>
                    <div class="desc__footer mt25">
                        <ul class="policys">
                            <?php foreach($service_footer as $v){?>
                            <li class="mb15 list_hover">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="desc_list_footer"
                                    title="<?=$v["tenkhongdau"]?>">
                                    <img src="./assets/images/tienIMG/muiten.png" class="mr10"
                                        alt="<?=$v["ten"]?>">&nbsp;<?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="item pt40mobile col-3 l-3 m-3 c-12">
                    <div class="title__footer">
                        <span class="title_span_footer">DỊCH VỤ</span>
                    </div>
                    <div class="desc__footer mt25">
                        <ul class="policys">
                            <?php foreach($projects as $v){?>
                            <li class="mb15 list_hover">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="desc_list_footer"
                                    title="<?=$v["tenkhongdau"]?>">
                                    <img src="./assets/images/tienIMG/muiten.png" class="mr10"
                                        alt="<?=$v["ten"]?>">&nbsp;<?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="item pt40mobile col-3 l-3 m-3 c-12">
                    <div class="title__footer">
                        <span class="title_span_footer">CHÍNH SÁCH</span>
                    </div>
                    <div class="desc__footer mt25">
                        <ul class="policys">
                            <?php foreach($chinhsach as $v){?>
                            <li class="mb15 list_hover">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="desc_list_footer"
                                    title="<?=$v["tenkhongdau"]?>">
                                    <img src="./assets/images/tienIMG/muiten.png" class="mr10"
                                        alt="<?=$v["ten"]?>">&nbsp;<?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="item pt40mobile col-3 l-3 m-3 c-12">
                    <div class="title__footer">
                        <span class="title_span_footer">BÁO GIÁ</span>
                    </div>
                    <div class="desc__footer mt25">
                        <ul class="policys">
                            <?php foreach($baogia as $v){?>
                            <li class="mb15 list_hover">
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" class="desc_list_footer"
                                    title="<?=$v["tenkhongdau"]?>">
                                    <img src="./assets/images/tienIMG/muiten.png" class="mr10"
                                        alt="<?=$v["ten"]?>">&nbsp;<?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="box__first__footer pt30 pb30">
            <div class="row">
                <div class="item col-12">
                    <div class="box__social d-block-m d-flex align-items-center justify-content-center flex-wrap">
                        <div class="box__t">
                            LIÊN KẾT MẠNG XÃ HỘI:
                        </div>
                        <div class="ml15 mt-m-10">
                            <?=$func->getSocial($socical)?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>






<div class="menu-bottom d-none">
    <ul class="clearfix">
        <li>
            <a href="" title="HomePage">
                <i class="fal fa-home"></i>
                <span class="sub">Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" title="clickToCall">
                <i class="fa-light fa-circle-phone-flip"></i>
                <span class="sub">Hotline</span>
            </a>
        </li>
        <li>
            <a href="" class="p-relative d-block" title="Trang chủ">

                <img class="scaleimg" width="70" height="70" src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>"
                    alt="Trang chủ" onerror="this.src='images/no-image.jpg'" />

            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#options" id="tool-1" title="Tiện ích" class="js-mobi-tool">
                <i class="fas fa-ellipsis-h mobi-tool-act"></i>
                <span class="sub">Tiện ích</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                <span class="bars-menu mobi-tool-act"></span>
                <span class="sub">Menu</span>
            </a>
        </li>
    </ul>
</div>