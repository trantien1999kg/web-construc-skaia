<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

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

        <div class="row mt20">

            <div class="col l-12 m-12 c-12">

                    <?php if($seo->getSeo('subject')!=''){ ?>

                    <div class="box-description mt10">

                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                    </div>  

                    <?php }?>

                    <div class="h__box__subject  p-relative pb40">

                    <?php if($seo->getSeo('content') !=''){ ?>

                    <div class="wrapper-toc mt20 mb20">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                    <?php }?>

                </div>

            </div>

        </div>

        <div class="row mt40">

            <div class="col l-12 m-12 c-12">

                <div class="row">

                <?php if(count($tintuc)>0){?>

                    <?php foreach($tintuc as $k => $v){ ?>

                    <div class="col l-3 m-4 c-6 mb20 mb-m-8 mb-t-16">

                        <div class="wrappers-services__box">

                            <div class="wrappers-services__box-img">

                                <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>" class="d-block hover-left" rel="dofollow" title="<?=$v["ten_$lang"]?>">

                                    <img src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                </a>

                            </div>

                            <div class="wrappers-services__box-detail wrappers-services__box-detail--modifiers">

                                <h3 class="line-2 wrappers-services__box-detail-title wrappers-services__box-detail-title--modifiers">

                                    <a href="<?=$v["type"]?>/<?=$alias_l.$v["tenkhongdau"]?>" rel="dofollow" title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a>

                                </h3>

                            </div>

                        </div>

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

        </div>

    </div>

</section>