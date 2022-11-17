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

                                                    $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($v["type"],$v["id"]));

                                                ?>

                                                <div class="col l-3 m-4 c-6 mb20 mb-m-8 mb-t-16 d-flex flex-column">

                                                    <div class="wrappers-album__box wrappers-album__box--tpl d-flex flex-column flex-cl-1">

                                                        <div class="wrappers-album__box-img">

                                                            <a href="<?=_upload_baiviet_l.$v["photo"]?>" title="<?=$v["ten_$lang"]?>" data-fancybox="album-tpl<?=$key?>" class="d-block hover-left">

                                                                <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>">

                                                            </a>

                                                            <div class="hidden">

                                                            <?php foreach($photos as $keypt => $vpt){ ?>

                                                                <a href="<?=_upload_baiviet_l.$vpt["photo"]?>" data-fancybox="album-tpl<?=$key?>">

                                                                    <img src="<?=_upload_baiviet_l.$vpt["photo"]?>" alt="">

                                                                </a>

                                                            <?php }?>

                                                            </div>

                                                            <script>

                                                                $(function(){

                                                                    $('[data-fancybox="album-tpl<?=$key?>"]').fancybox({

                                                                        thumbs : {
                                                                        autoStart : true
                                                                        },
                                                                        buttons : [
                                                                        'zoom',
                                                                        'close'
                                                                        ]

                                                                    });

                                                                });
                                                                
                                                            </script>

                                                        </div>

                                                        <div class="wrappers-album__box-detail d-flex flex-column flex-cl-1">

                                                            <h2 class="wrappers-album__box-detail-title line-2 flex-cl-1">

                                                                <a href="<?=_upload_baiviet_l.$v["photo"]?>" title="<?=$v["ten_$lang"]?>" data-fancybox="album-tpl<?=$key?>"><?=$v["ten_$lang"]?></a>

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