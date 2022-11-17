<?php

    $row_tacgia = $db->rawQueryOne("select ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,mota_$lang as mota,link_facebook,link_instagram,link_twitter,link_zalo,type from #_baiviet where hienthi=1 and type=? and id=? limit 0,1",array('tac-gia',$row_detail["id_tacgia"]));

?>

<div id="fb-root"></div>

<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>

<section class="wrapper-news__detail">

    <div class="grid wide">

        <div class="row">

            <?php
            
                if(count($tintuc)>0){

                    $col = "col l-9 m-8 c-12";

                }else{

                    $col = "col l-12 m-12 c-12";

                }
            
            ?>

            <div class="<?=$col?>">

                <div class="content-detail mt20 clearfix">

                    <div class="other-news-detail font-detail">

                        <div class="detail">

                            <div class="title-default t-center mt-20 p-relative">

                                <h1><span><?=$seo->getSeo('h1')?></span></h1>

                            </div>

                            <div class="pucblisher d-flex mt60 d-none-m">

                                <p class="mr30"><i class="fa fa-calendar mr5"></i> <?=$func->daysOfTheWeek($row_detail["ngaytao"])?>, <?=date('d/m/Y',$row_detail['ngaytao'])?></p>

                                <p class="mr30"><i class="fa fa-user mr5"></i> <?=$row_tacgia["ten"]!='' ?$row_tacgia["ten"]:'Administrator'?></p>

                                <p><i class="fa fa-eye mr5"></i><?=$row_detail['luotxem']?></p>

                            </div>

                            
                            <div class="d-none d-block-m">

                                <div class="pucblisher d-flex justify-content-between mt60">

                                    <p class="mr30"><i class="fa fa-calendar mr5"></i> <?=date('d/m/Y',$row_detail['ngaytao'])?>, <?=$row_tacgia["ten"]!='' ?$row_tacgia["ten"]:'Administrator'?></p>

                                    <p><i class="fa fa-eye mr5"></i><?=$row_detail['luotxem']?></p>

                                </div>

                            </div>

                            <div class="box-description mt20 original">

                                <span><?=htmlspecialchars_decode($seo->getSeo('content'))?></span>

                            </div>

                            <div class="wrapper-toc wrapper-content__news-detail mt20">

                                <div class="content ul-list-detail original">

                                    <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                                </div>

                            </div>

                        </div>

                        <div class="detail mt20">

                            <div class="wrap-aside__socical">

                                <span class="wrap-title__socialdetail">Chia sẻ:</span>

                                <div class="socialmediaicons">

                                    <?php include_once _source.'shareLinks.php'?>

                                </div>

                            </div>

                        </div>

                        <?php if($row_tacgia){ ?>

                        <div class="wrappers-news-detail__author mt20">

                            <div class="wrappers-news-detail__author-img">

                                <a href="<?=$row_tacgia["type"]?>/<?=$row_tacgia["tenkhongdau"]?>" class="d-block hover-left"  rel="dofollow" title="<?=$row_tacgia["ten"]?>">

                                    <img src="<?=_upload_baiviet_l.$row_tacgia["photo"]?>" alt="<?=$row_tacgia["ten"]?>" <?=$func->errorImg()?>>

                                </a>

                            </div>

                            <div class="wrappers-news-detail__author-content">

                                <div class="wrappers-news-detail__author-content-title mb20">

                                    <a href="<?=$row_tacgia["type"]?>/<?=$row_tacgia["tenkhongdau"]?>" rel="dofollow" title="<?=$row_tacgia["ten"]?>"><?=$row_tacgia["ten"]?></a>

                                </div>

                                <div class="wrappers-news-detail__author-des"><?=htmlspecialchars_decode($row_tacgia["mota"])?></div>

                                <div class="wrappers-news-detail__author-content-socical">

                                    <ul class="wrappers-news-detail__author-content-socical-list d-flex align-items-center">

                                        <li>

                                            <a href="<?=$row_tacgia["link_facebook"]?>" title="Link facebook" rel="nofollow" target="_blank">

                                                <img src="./assets/images/socical-facebook.png" alt="">

                                            </a>

                                        </li>

                                        <li>

                                            <a href="<?=$row_tacgia["link_zalo"]?>" title="Link zalo" rel="nofollow" target="_blank">

                                                <img src="./assets/images/socical-zalo.png" alt="">

                                            </a>

                                        </li>

                                        <li>

                                            <a href="<?=$row_tacgia["link_instagram"]?>" title="Link zalo" rel="nofollow" target="_blank">

                                                <img src="./assets/images/socical-instagram.png" alt="">

                                            </a>

                                        </li>

                                        <li>

                                            <a href="<?=$row_tacgia["link_twitter"]?>" title="Link zalo" rel="nofollow" target="_blank">

                                                <img src="./assets/images/socical-twitter.png" alt="">

                                            </a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <?php }?>

                        <div class="box-comment__detail mt20">

                            <div class="wrapper-toc">
                                
                                <div class="fb-comments"data-href="<?= $func->getCurrentPageURL() ?>"data-width="100%" data-numposts="5"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php include _layouts."right.php"; ?>

        </div>

    </div>

</section>
