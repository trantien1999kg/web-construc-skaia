<script src="assets/plugins/slick/slick.min.js"></script>
<link rel="stylesheet" href="assets/plugins/slick.css">
<link rel="stylesheet" href="assets/plugins/slick.theme.css">
<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10" >

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mb30 mb-m-30">

                <div class="title-default t-center mb20 mb-m-10 mb-t-10 p-relative">

                    <h1>

                        <span>
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>

                    </h1>

                </div>

            </div>

        </div>

        <?php if($seo->getSeo('subject')!='' || $seo->getSeo('content')!=''){ ?>

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt10">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                <div class="h__box__subject p-relative pb40">

                    <div class="wrapper-toc mt10 mb20">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <?php }?>

        <div class="row mt30">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row">

                    <?php if($com =="dich-vu"){?>
                    <?php if(count($tintuc)>0){?>

                    <?php if($deviceType != 'phone'){ ?>
                        <?php foreach($tintuc as $k => $v){
                          $list_photos=$db->rawQuery("select * from #_baiviet_photo where id_baiviet='".$v['id']."'");

                          $current_time=(($k+1)*1500);
                         ?>

                    <div class="item col-12">
                        <div class="box__detail__service mb40">
                            <div class="title__detail__service">
                                <div class="box__more__title d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <div class="text__detail">
                                            <span><?=$v["ten_$lang"]?></span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="box__detail__more d-none-m">
                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau_$lang"]?>" title="">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box__photo__detail mt30">
                                <div class="row row5 d-flex flex-wrap">
                                    <div class="item5 col-9">
                                        <div class="border_projectB slick<?=$k?>">

                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau_$lang"]?>" rel="dofollow"
                                                title="<?=$v["ten_$lang"]?>" class="d-block ratio-img" img-width="637"
                                                img-height="439">
                                                <img class="ratio-img__content img-scale"
                                                    src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>"
                                                    alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>
                                            </a>
                                            <?php foreach($list_photos as $k1 => $v1){?>

                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau_$lang"]?>" rel="dofollow"
                                                title="<?=$v["ten_$lang"]?>" class="d-block ratio-img" img-width="637"
                                                img-height="439">
                                                <img class="ratio-img__content img-scale"
                                                    src="./assets/images/loading_image.svg"
                                                    data-src="<?=_upload_baiviet_l.$v1["photo"]?>"
                                                    alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>
                                            </a>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="item5 col-3">
                                        <div class="box__col__slick">
                                            <div class="slick<?=($k+1)*100?>">
                                                
                                                <div class="mb20">
                                                <span class="hover-left d-block border_projectS ratio-img" img-width="333"
                                                    img-height="333">

                                                    <img class="ratio-img__content img-scale"
                                                        src="./assets/images/loading_image.svg"
                                                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" style="cursor:pointer;display:block;"
                                                        alt="<?=$v["ten_$lang"]?>" />" <?=$func->errorImg()?>>

                                                </span>
                                                </div>
                                                <?php foreach($list_photos as $k1 => $v1){?>
                                                    <div class="mb20">
                                                    <span class="hover-left d-block border_projectS ratio-img" img-width="333"
                                                    img-height="333">

                                                    <img class="ratio-img__content img-scale"
                                                        src="./assets/images/loading_image.svg"
                                                        data-src="<?=_upload_baiviet_l.$v1["photo"]?>" style="cursor:pointer;display:block;"
                                                        alt="<?=$v["ten_$lang"]?>" />" <?=$func->errorImg()?>>

                                                </span>
                                                    </div>
                                                
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                    $(function() {

                        if ($('.slick<?=$k?>').length > 0) {

                            $('.slick<?=$k?>').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: false,
                                fade: true,
                                infinite: true,
                                asNavFor: '.slick<?=($k+1) * 100?>'
                            });
                            $('.slick<?=($k+1) * 100?>').slick({
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                asNavFor: '.slick<?=$k?>',
                                dots: false,
                                arrows: false,
                                vertical: true,
                                focusOnSelect: true,
                                infinite: true,
                                autoplay: false,
                                autoplaySpeed: <?=$current_time?>,
                            });

                        }

                    });
                    </script>
                    <?php }?>
                        <?php }else{ ?>

                            <?php foreach($tintuc as $k => $v){ $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]); ?>

<div class="item col-4 l-4 m-4 c-12">
    <div class="i-news-box mb30">
        <div class="i-box-white">
            <div class="i-pic-news">
                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" rel="dofollow"
                    title="<?=$v["ten"]?>" class="d-block ratio-img" img-width="334"
                    img-height="339">
                    <img class="ratio-img__content img-scale"
                        src="./assets/images/loading_image.svg"
                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                        <?=$func->errorImg()?>>
                </a>

            </div>
            <div class="i-info-news">
                <h4 class="i-name-news line-2">
                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>"><?=$v["ten_$lang"]?></a>
                </h4>
                <p class="i-time-news">Ngày đăng: <?=date('d/m/Y  g:i:s',$v["ngaytao"])?></p>
                <div class="i-desc-news line-4"><?=$seoDB["description_$lang"]?></div>
            </div>
        </div>
    </div>
</div>

<?php }?>

                            <?php } ?>

                    <?php }?>
                    <?php }else{ ?>
                    <?php if(count($tintuc)>0){?>

                    <?php foreach($tintuc as $k => $v){ $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]); ?>

                    <div class="item col-4 l-4 m-4 c-12">
                        <div class="i-news-box mb30">
                            <div class="i-box-white">
                                <div class="i-pic-news">
                                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" rel="dofollow"
                                        title="<?=$v["ten"]?>" class="d-block ratio-img" img-width="334"
                                        img-height="339">
                                        <img class="ratio-img__content img-scale"
                                            src="./assets/images/loading_image.svg"
                                            data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                            <?=$func->errorImg()?>>
                                    </a>

                                </div>
                                <div class="i-info-news">
                                    <h4 class="i-name-news line-2">
                                        <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>"><?=$v["ten_$lang"]?></a>
                                    </h4>
                                    <p class="i-time-news">Ngày đăng: <?=date('d/m/Y  g:i:s',$v["ngaytao"])?></p>
                                    <div class="i-desc-news line-4"><?=$seoDB["description_$lang"]?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }?>

                    <?php }?>
                    <?php }?>

                </div>

            </div>

            <?php if(!$func->isAjax()){?>

            <div class="col l-12 m-12 c-12 mb20">

                <div id="pagingPage"><?=$paging?></div>

            </div>

            <?php }?>

        </div>

    </div>

</section>