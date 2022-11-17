<?php $link_search = $com.'/'.$act.'?' ?>

<section class="products-page">

    <div class="grid wide">

        <div class="row mt20 mt-m-10 mt-t-10">

            <div class="col l-12 m-12 c-12" style="margin-bottom:0 !important;">

                <div class="title-default t-center mb30 mb-m-10 mb-t-10 p-relative">

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

        <div class="row mt20">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

                <?php }?>

                <div class="h__box__subject  p-relative pb40">

                    <?php if($seo->getSeo('content')!=''){ ?>

                    <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                    <?php }?>

                </div>

            </div>

        </div>

        <div class='row mt40'>

            <div class="col l-12 m-12 c-12">

                <div class="box-product-detail">

                    <div class="row">

                        <div class="col l-12 m-12 c-12" style="margin-top:0!important;">

                            <div class="box-inPage">

                                <div class="tab-content">

                                    <div class="tab-panel">

                                        <?php if(count($tintuc)>0){?>
                                        <?php if($deviceType == 'phone'){?>
                                        <div class="row" id="grid-view">

                                            <?php
                                                foreach($tintuc as $key => $v){

                                                    $alias_call = $func->getAlias($v['id_list'],'baiviet_list',$v['type']);

                                                    $alias_l = $func->checkListAlias($alias_call);
                                                  
                                                ?>

                                            <div class="col l-3 m-4 c-6 d-flex flex-column mb20">

                                                <div class="wrap-productshot__boxbc d-flex flex-column p-relative">

                                                    <div class="wrap-productshot__boxbc-outline"></div>

                                                    <div class="wrap-productshot__boxbc-img p-relative">

                                                        <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>"
                                                            title="<?=$v["ten_$lang"]?>" rel="dofollow"
                                                            class="d-block hover-left">

                                                            <img loading=lazy src="<?=_upload_baiviet_l.$v["photo"]?>"
                                                                alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>


                                                            <?php if($func->percentPrice($v["giacu"],$v["giaban"])>0){ ?>

                                                            <div class="wrap-productshot__boxbc-img-sale">

                                                                <span
                                                                    class="wrap-productshot__boxbc-img-sale-label">SALE</span>

                                                                <span
                                                                    class="wrap-productshot__boxbc-img-sale-content"><?=$func->percentPrice($v["giacu"],$v["giaban"])?></span>

                                                            </div>

                                                            <?php }?>

                                                        </a>

                                                    </div>

                                                    <div class="wrap-productshot__boxbc-content d-flex flex-column">

                                                        <div class="wrap-productshot__boxbc-content-aside-title mb20">

                                                            <h4 class="line-2 wrap-productshot__boxbc-content-titles">

                                                                <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>"
                                                                    title="<?=$v["ten_$lang"]?>"
                                                                    rel="dofollow"><?=$v["ten_$lang"]?></a>

                                                            </h4>

                                                        </div>

                                                        <div
                                                            class="wrap-productshot__boxbc-content-price d-flex flex-wrap mb10">

                                                            <span
                                                                class="wrap-productshot__boxbc-content-price-news col-12"><?=($v["giaban"]!=0) ? $func->changeMoney($v["giaban"],$lang):'Liên hệ';?></span>


                                                        </div>

                                                    </div>

                                                    <div class="wrap-productshot__boxbc-bottom d-flex flex-wrap">

                                                        <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>"
                                                            class="col-6 js-addcart-buynow" data-id="<?=$v["id"]?>"
                                                            data-qty="1"> Xem
                                                            ngay</a>

                                                        <span class="col-6">Lượt xem: <?=$v["luotxem"]?></span>

                                                    </div>

                                                </div>

                                            </div>

                                            <?php }?>

                                        </div>
                                        <?php }else{?>
                                        <div class="row" id="grid-view">

                                            <?php foreach($tintuc as $key => $v){

                                                $alias_call = $func->getAlias($v['id_list'],'baiviet_list',$v['type']);

                                                $alias_l = $func->checkListAlias($alias_call);?>

                                            <div class="col l-3 m-4 c-12 d-flex flex-column mb20">

                                                <div class="wrap-productshot__boxbc d-flex flex-column p-relative">

                                                    <div class="wrap-productshot__boxbc-outline"></div>

                                                    <div class="wrap-productshot__boxbc-img p-relative">

                                                        <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>"
                                                            title="<?=$v["ten_$lang"]?>" rel="dofollow"
                                                            class="d-block hover-left">

                                                            <img loading=lazy src="<?=_upload_baiviet_l.$v["photo"]?>"
                                                                alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                                            <?php if($func->percentPrice($v["giacu"],$v["giaban"])>0){ ?>

                                                            <div class="wrap-productshot__boxbc-img-sale">

                                                                <span
                                                                    class="wrap-productshot__boxbc-img-sale-label">SALE</span>

                                                                <span
                                                                    class="wrap-productshot__boxbc-img-sale-content"><?=$func->percentPrice($v["giacu"],$v["giaban"])?></span>

                                                            </div>

                                                            <?php }?>

                                                        </a>

                                                    </div>

                                                    <div class="wrap-productshot__boxbc-content d-flex flex-column">

                                                        <div class="wrap-productshot__boxbc-content-aside-title mb20">

                                                            <h3 class="line-2 wrap-productshot__boxbc-content-titles">

                                                                <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>"
                                                                    title="<?=$v["ten_$lang"]?>"
                                                                    rel="dofollow"><?=$v["ten_$lang"]?></a>

                                                            </h3>

                                                        </div>

                                                        <div
                                                            class="wrap-productshot__boxbc-content-price d-flex flex-wrap mb10">

                                                            <span class="wrap-productshot__boxbc-content-price-news"><?=($v["giaban"]!=0) ? $func->changeMoney($v["giaban"],$lang):'Liên hệ';?></span>
                                                            <?php if($v["giacu"] !=0){ ?>
                                                                <del class="wrap-productshot__boxbc-content-price-old"><?=($v["giacu"]!=0) ?  $func->changeMoney($v["giacu"],$lang):'';?></del>
                                                            <?php } ?>
                                                        </div>

                                                    </div>

                                                    

                                                </div>

                                            </div>

                                            <?php }?>

                                        </div>
                                        <?php }?>

                                        <?php }?>

                                    </div>

                                </div>



                                <?php if(!$func->isAjax()){?>



                                <div class="col l-12 m-12 c-12 mb20">



                                    <div id="pagingPage"><?=$paging?></div>



                                </div>



                                <?php }?>



                                <?php if($com!='tags-san-pham'){ ?>



                                <input type="hidden" name="keywords" id="keyword" value="<?=$_GET["keywords"]?>" />



                                <input type="hidden" name="href" value="<?=base64_encode($https_config.$link_search)?>">



                                <?php }else{ ?>



                                <input type="hidden" name="keywords" id="keyword" value="<?=$_GET["keywords"]?>" />



                                <input type="hidden" name="href" value="<?=base64_encode($https_config.$link_search)?>">


                                <?php } ?>



                            </div>



                        </div>



                    </div>



                </div>



            </div>

        </div>

    </div>

</section>