<section class="wrapper-collection">

    <div class="grid wide">
    
        <div class="row">

            <div class="col l-12 m-12 c-12 mb30">

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

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject') !=''){ ?>

                    <div class="box-description mt10">

                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                    </div>

                    <?php }?>

                    <div class="h__box__subject  p-relative pb40">

                <?php if($seo->getSeo('content') !=''){ ?>

                    <div class="wrapper-toc mt10 mb20">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                <?php }?>

                </div>

            </div>

        </div>

        <?php if(count($tintuc)>0){ ?>

        <div class="row mt30 mb30">

        <?php foreach($tintuc as $key => $value){
            
            $alias_call = $func->getAlias($value['id_list'],'baiviet_list',$value['type']);

            $alias_l = $func->checkListAlias($alias_call);

            ?>

              <div class="col l-2 m-3 c-6 mb20 mb-m-8 mb-t-16">

                <div class="wrapper-construction__box">

                    <div class="wrapper-construction__box-img">

                        <a href="<?=$value["type"]?>/<?=$alias_l.$value["tenkhongdau"]?>" class="d-block hover-left" title="<?=$value["ten_$lang"]?>">

                            <img src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

                        </a>

                    </div>

                    <div class="wrapper-construction__box-detail hidden">

                        <h3 class="line-2">

                            <a href="<?=$value["type"]?>/<?=$alias_l.$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten_$lang"]?>"><?=$value["ten_$lang"]?></a>

                        </h3>

                    </div>

                </div>

            </div>      

        <?php }?>

        </div>

        <div class="row">

            <?php if(!$func->isAjax()){?>

            <div class="col l-12 m-12 c-12 mb20">

                <div id="pagingPage"><?=$paging?></div>

            </div>

            <?php }?>

        </div>

        <?php }?>

    </div>

</section>

