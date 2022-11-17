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

                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
   
                        ?>

                        <div class='col l-6 m-6 c-12 mb20'>

                            <div class="box-post">

                                <div class="row">

                                    <div class='col l-4 m-6 c-12'>

                                        <a class='post-img' href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["ten_$lang"]?>">
                                            <span><i class="fa fa-file-text"></i></span>
                                            <img loading="lazy" class="wrapper-images__news" src='<?=_upload_baiviet_l.$v["photo"]?>'
                                                alt="<?=$v["ten_$lang"]?>" <?=$func->errorImg()?> /></a>

                                    </div>

                                    <div class='col l-8 m-6 c-12'>

                                        <h2 class='post-name line-2'><a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>"
                                                title="<?=$v["ten_$lang"]?>"><?=$v["ten_$lang"]?></a></h2>

                                        <p class="post-date clearfix">

                                            <span class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?=date("d/m/Y", $v['ngaytao'])?></span>
                                            <span class="pull-right"><?=_luotxem?>: <?=$v['luotxem']?></span>

                                        </p>

                                        <div class='post-desc j-text mt5 line-3'>
                                            <?=$seoDB["description_$lang"]?>
                                        </div>

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