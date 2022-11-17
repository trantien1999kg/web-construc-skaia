<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

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

                <?php if(count($tintuc)>0){?>

                    <?php foreach($tintuc as $k => $v){

                        $alias_call = $func->getAlias($v['id_list'],'baiviet_list',$v['type']);

                        $alias_l = $func->checkListAlias($alias_call);

                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
   
                        ?>

                        <div class="col l-3 m-3 c-12 mb20 d-flex flex-column">

                            <div class="wrapper-deposits__aside flex-cl-1 d-flex flex-column">

                                <div class="wrapper-deposits__aside-box flex-cl-1 d-flex flex-column">

                                    <div class="wrapper-deposits__box-img">

                                        <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>" rel="dofollow" class="d-block hover-left ratio-img" img-width="317" img-height="200">

                                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?>>

                                        </a>

                                    </div>

                                    <div class="wrapper-deposits__box-detail flex-cl-1 d-flex flex-column">

                                        <h3 class="wrapper-deposits__box-detail-title line-2 mg0">

                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>" rel="dofollow"><?=$v["ten_$lang"]?></a>

                                        </h3>

                                        <div class="wrapper-deposits__box-detail-view mt10">
                                                
                                            <p class="post-date post-date--modifiers d-flex justify-content-between" style="border:0">

                                                <span class="pull-left"><i class="fa-solid fa-clock"></i>
                                                    <?=$func->timeAgo($v['ngaytao'])?></span>
                                                <span class="pull-right"><i class="fa-sharp fa-solid fa-eye"></i> <?=_luotxem?>: <?=$v['luotxem']?></span>

                                            </p>

                                        </div>

                                        <div class="wrapper-deposits__box-detail-des line-3 mt10"><?=$seoDB["description_$lang"]?></div>

                                    </div>

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