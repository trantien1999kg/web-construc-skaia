<link href="assets/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" />

<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>

<section>

    <div class="container">

        <div class="row">

            <div class="item col-12">

                <div class="breadcumb">
                    
                    <?=$str_breadcrumbs?>

                </div>

            </div>

            <div class="item col-12">

                <div class="content-detail mt20 mb20 clearfix">

                    <div class="other-news-detail font-detail">

                        <div class="detail">

                            <div class="title-default title-default--project mt-20 p-relative left" element-hover="website">

                                <h1 style="text-align:left !important;"><span><?=$seo->getSeo('h1')?></span></h1>

                            </div>

                            <div class="pucblisher d-flex mt40">

                                <p class="mr30"><i class="fa fa-calendar mr5"></i><?=date('d/m/Y',$row_detail['ngaytao'])?>
                                </p>

                                <p class="mr30"><i class="fa fa-user mr5"></i>Administrator</p>

                                <p><i class="fa fa-eye mr5"></i><?=$row_detail['luotxem']?></p>

                            </div>

                            <div class="d-flex flex-wrap row">

                                <div class="col-7 w-100-m item">

                                    <div class="box-carousel-project">

                                        <div id="sync1">

                                            <div class="owl-carousel owl-theme">

                                                <div class="img-carousel">

                                                    <a href="<?=_upload_baiviet_l.$row_detail['photo']?>"
                                                        data-fancybox="images">

                                                        <img src="<?=_upload_baiviet_l.$row_detail['photo']?>"
                                                            style="width: 100%;height: auto;object-fit: cover;-webkit-object-fit: cover;-o-object-fit: cover;-moz-object-fit: cover;-ms-object-fit: cover;aspect-ratio: 590 / 490;transition: all .5s cubic-bezier(0.2, 0.3, 0.8, 0.7);" alt="<?=$row_detail['ten_'.$lang]?>">

                                                    </a>

                                                </div>
                                                <?php for ($i=0; $i < count($photos); $i++) { ?>
                                                <div class="img-carousel">
                                                    <a href="<?=_upload_baiviet_l.$photos[$i]['photo']?>"
                                                        data-fancybox="images">

                                                        <img src="<?=_upload_baiviet_l.$photos[$i]['photo']?>"
                                                            style="width: 100%;height: auto;object-fit: cover;-webkit-object-fit: cover;-o-object-fit: cover;-moz-object-fit: cover;-ms-object-fit: cover;aspect-ratio: 590 / 490;transition: all .5s cubic-bezier(0.2, 0.3, 0.8, 0.7);" alt="<?=$photos[$i]['ten_'.$lang]?>">

                                                    </a>
                                                </div>
                                                <?php }?>

                                            </div>

                                        </div>

                                        <div id="sync2" class="mt20">

                                            <div class="owl-carousel owl-theme">

                                                <div class="img-carousel">

                                                    <a href="javascript:void(0)">

                                                        <img src="<?=_upload_baiviet_l.$row_detail['photo']?>"
                                                            style="width: 100%;height: auto;object-fit: cover;-webkit-object-fit: cover;-o-object-fit: cover;-moz-object-fit: cover;-ms-object-fit: cover;aspect-ratio: 590 / 490;transition: all .5s cubic-bezier(0.2, 0.3, 0.8, 0.7);" alt="<?=$row_detail['ten_'.$lang]?>">

                                                    </a>

                                                </div>
                                                <?php for ($i=0; $i < count($photos); $i++) { ?>
                                                <div class="img-carousel">
                                                    <a href="javascript:void(0)">

                                                        <img src="<?=_upload_baiviet_l.$photos[$i]['photo']?>"
                                                            style="width: 100%;height: auto;object-fit: cover;-webkit-object-fit: cover;-o-object-fit: cover;-moz-object-fit: cover;-ms-object-fit: cover;aspect-ratio: 590 / 490;transition: all .5s cubic-bezier(0.2, 0.3, 0.8, 0.7);" alt="<?=$photos[$i]['ten_'.$lang]?>">

                                                    </a>
                                                </div>
                                                <?php }?>


                                            </div>

                                        </div>

                                    </div>



                                </div>
                                <div class="col-5 w-100-m item mb-m-10 mt-m-10">
                                    <div class="original box-gray">
                                        <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                                    </div>
                                </div>
                                <div class="mt20 mb20 col-12 item">

                                    <div class="wrapper-aside-content pd20 border">

                                        <div class="wrapper-toc mt20 bg-white">

                                            <div class="content ul-list-detail original">

                                                <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="mt20">

                                        <div class="box-title mt10">

                                            <?= _comment ?>

                                        </div>

                                        <div class="box-box bg-white">

                                            <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>"data-width="100%" data-numposts="5"></div>

                                        </div>

                                    </div>

                                    <div class="detail mt20">

                                        <div class="socialmediaicons">

                                            <?php include_once _source.'shareLinks.php'?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php if(count($tintuc)>0){?>


                            <div class="wrapper-project__aside p-relative">

                                <span class="button-slider__prev button-slider__btn button-slider__prev--category prev--project d-none-m">

                                    <i class="fa-light fa-arrow-left"></i>

                                </span>

                                <span class="button-slider__next button-slider__btn button-slider__next--category next--project d-none-m">

                                    <i class="fa-light fa-arrow-right"></i>

                                </span>

                                <div class="owl-carousel owl-theme owl-carousel-loop danhmuc-slider owl-carousel-project" data-height="640" data-dot="1" data-nav="0"

                                data-loop="1" data-play="1" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1"

                                <?php if($deviceType=='computer'){ ?> data-margin='20' <?php }else{ ?> data-margin='8' <?php }?> data-deplay="5000">

                                <?php foreach($tintuc as $key => $value){

                                    $alias_call = $func->getAlias($value['id_list'],'baiviet_list',$value['type']);

                                    $alias_l = $func->checkListAlias($alias_call);
                                    
                                    ?>

                                    <div class="pt10 pb10">

                                        <div class="wrapper-projects__box p-relative mb20">

                                            <div class="wrapper-projects__box-img">

                                                <a href="<?=$value["type"]?>/<?= $alias_l.$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten_$lang"]?>" class="d-block hover-left">

                                                    <img src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

                                                </a>

                                            </div>

                                            <div class="wrap-project__box-detail-overflow">

                                                <h5 class="wrap-project__box-detail-overflow-title line-1">

                                                    <a href="<?=$value["type"]?>/<?=$alias_l.$value["tenkhongdau"]?>" rel="dofollow" class="wrap-project__box-detail-overflow-links"><?=$value["ten_$lang"]?></a>

                                                </h5>

                                            </div>

                                        </div>

                                    </div>

                                <?php }?>

                                </div>

                            </div>


                        <?php }?>

                </div>

            </div>

        </div>

    </div>

</section>