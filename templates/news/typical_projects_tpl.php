<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mb50 mb-m-30">

                <div class="title-default t-center mb20 mb-m-10 mb-t-10 p-relative">

                    <span class="title-default__index-icon">

                        <img src="./assets/images/icontieude.png" alt="">

                    </span>

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

         <div class="row">

            <div class="item col-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>
                
                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                <div class="wrapper-toc mt20 mb20">

                    <div class="content ul-list-detail">

                        <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                    </div>

                </div>

                <?php }?>

            </div>

        </div>

        <div class="row mt30">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row no-gutters">

                <?php if(count($tintuc)>0){?>

                    <?php foreach($tintuc as $k => $v){

                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);

                        $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($v["type"],$v["id"]));
   
                        ?>

                        <div class="col l-3 m-4 c-6">

                            <div class="wrapper-album__box">

                                <div class="wrapper-album__box-img">

                                    <a href="<?=_upload_baiviet_l.$v["photo"]?>" data-fancybox="images-tpl<?=$k?>" title="<?=$v["ten"]?>" class="p-relative d-block">

                                        <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                        <div class="wrapper-album__box-overflow">

                                            <h2 class="wrapper-album__box-overflow-title line-2">

                                                <span><?=$v["ten_$lang"]?></span>

                                            </h2>

                                        </div>

                                    </a>

                                    <div class="hidden">

                                    <?php foreach($photos as $keypt => $vpt){ ?>

                                        <a href="<?=_upload_baiviet_l.$vpt["photo"]?>" data-fancybox="images-tpl<?=$k?>">

                                            <img src="<?=_upload_baiviet_l.$vpt["photo"]?>" alt="">

                                        </a>

                                    <?php }?>

                                    </div>

                                    <script>

                                        $(function(){

                                            $('[data-fancybox="images-tpl<?=$k?>"]').fancybox({

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

                            </div>

                        </div>

                    <?php }?>

                <?php }else{?>
                <div class="item col-12 t-center">
                    Nội dung đang cập nhật....
                </div>
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