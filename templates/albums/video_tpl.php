<?php $link_search = $com.'/'.$act.'?' ?>

<section class="products-page">

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
        
        <div class='row mt30'>

            <div class="col l-12 m-12 c-12">

                <div class="box-product-detail">

                    <div class="row">

                        <div class="col l-12 m-12 c-12" style="margin-top:0!important;">

                            <div class="box-inPage">

                                <div class="tab-content">

                                   <div class="tab-panel">       

                                        <?php if(count($tintuc)>0){?>

                                        <div class="row" id="grid-view">

                                            <?php

                                                foreach($tintuc as $key => $v){

                                                    $videoImg = $func->getYoutubeImg($v);
                                                    
                                                ?>

                                                <div class="col l-4 m-4 c-12 mb20 d-flex flex-column">

                                                    <div class="wrappers-video__box p-relative">

                                                        <div class="wrappers-video__box-img">

                                                            <a href="<?=$v["links"]?>" data-fancybox="video<?=$key?>" title="<?=$v["ten_$lang"]?>">

                                                                <img src="<?=$videoImg?>" alt="<?=$v["ten_$lang"]?>"> 

                                                                <span class="wrappers-video__box-img-playvideo"><i class="fa-solid fa-play"></i></span>

                                                            </a>

                                                        </div>

                                                        <div class="wrappers-video__box-detail">

                                                            <h2 class="wrappers-video__box-detail-title line-2 mg0">

                                                                <a href="<?=$v["links"]?>" data-fancybox="video<?=$key?>" title="<?=$v["ten"]?>"><?=$v["ten_$lang"]?></a>

                                                            </h2>

                                                        </div>
                                    
                                                    </div>

                                                </div>

					                        <?php }?>

                                        </div>

                                        <?php }else echo '<p class="notice mg-0 t-center">Nội dung đang cập nhật</p>';  ?>

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