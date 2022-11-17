<?php if(!empty($row_list["banner"])){ ?>

<section class="wrappers-banner__quote">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="wrappers-banner__quote-box">

                    <span class="d-block hover-left">

                        <img src="<?=_upload_baiviet_l.$row_list["banner"]?>" alt="<?=$row_list["ten_$lang"]?>" <?=$func->errorImg()?>>

                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>

<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12 mb30 mb-m-30 d-none">

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

        <?php if(count($row_cat)>0){ ?>

        <div class="row mt20">

           <div class="col l-12 m-12 c-12">

                <ul class="wrappers-quote__list">

                    <?php $stt =0; foreach($row_cat as $key => $vcat){
                        
                            $row_item = $db->rawQuery("select stt,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,thongdung,caocap from #_baiviet_item where hienthi=1 and type=? and id_list=? and id_cat=? order by stt asc",array($vcat["type"],$vcat["id_list"],$vcat["id"]));

                        ?>

                    <li class="wrappers-quote__items">

                        <div class="d-flex flex-wrap">

                            <div class="l-8 m-8 c-6 d-flex flex-column">

                                <div class="wrappers-quote__list-box-title d-flex align-items-center bg-website-quote">

                                    <span class="wrappers-quote__list-box-title-icon d-none-m">

                                        <img src="<?=_upload_baiviet_l.$vcat["photo"]?>" alt="<?=$vcat["ten"]?>" <?=$func->errorImg()?>>
                                        
                                    </span>

                                    <h2 class="mg0 wrappers-quote__list-box-title-name"><?=$vcat["ten"]?></h2>

                                </div>

                            </div>

                            <div class="l-2 m-2 c-3 bg-website-quote d-flex flex-column">

                                <div class="wrappers-quote__list-box-title wrappers-quote__list-box-title--pack wrappers-quote__list-box-title--pack-bgwebsite">

                                   <span class="wrappers-quote__list-box-high-class">THÔNG DỤNG</span>

                                </div>

                            </div>

                            <div class="l-2 m-2 c-3 bg-color-quote d-flex flex-column">

                                <div class="wrappers-quote__list-box-title wrappers-quote__list-box-title--pack">

                                   <span class="wrappers-quote__list-box-high-class">CAO CẤP</span>

                                </div>

                            </div>

                        </div>

                    </li>

                    <?php foreach($row_item as $key => $vitem){ $stt++; ?>

                    <li class=" wrappers-quote__items--td">

                        <div class="d-flex flex-wrap">

                            <div class="l-8 m-8 c-6 d-flex flex-column">

                                <div class="wrappers-quote__list-box-title d-flex align-items-center wrappers-quote__list-box-title--td">

                                    <span class="wrappers-quote__list-box-title-stt"><?=$stt?></span>

                                    <h3 class="mg0 wrappers-quote__list-box-title-name wrappers-quote__list-box-title-name-item"><?=$vitem["ten"]?></h3>

                                </div>

                            </div>

                            <div class="l-2 m-2 c-3  d-flex flex-column">

                                <div class="wrappers-quote__list-box-check">

                                    <?php if($vitem["thongdung"]==1){ ?>

                                    <span><i class="fa-solid fa-circle"></i></span>

                                    <?php }?>

                                </div>

                            </div>

                            <div class="l-2 m-2 c-3 d-flex flex-column">

                                <div class="wrappers-quote__list-box-check wrappers-quote__list-box-check--lastchild">

                                    <?php if($vitem["caocap"]==1){ ?>

                                    <span><i class="fa-solid fa-circle"></i></span>

                                    <?php }?>
                                    
                                </div>

                            </div>

                        </div>

                    </li>

                    <?php }?>

                    

                    <?php }?>

                </ul>

           </div>
            
        </div>

        <?php }else{ ?>

        <div class="row mt20">

            <div class="col l-12 m-12 c-12">

                <p class="t-center">Bảng báo giá đang được cập nhật...</p>

            </div>

        </div>

        <?php }?>

        <?php if($seo->getSeo('subject')!='' || $seo->getSeo('content')!=''){ ?>

        <div class="row mt20">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt10">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>
                
                <?php }?>

                <?php if($seo->getSeo('content')!=''){ ?>

                    <div class="wrapper-toc mt10 mb20">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                <?php }?>

                <div class="detail mt20">

                    <div class="wrap-aside__socical">

                        <span class="wrap-title__socialdetail">Chia sẻ:</span>

                        <div class="socialmediaicons">

                            <?php include_once _source.'shareLinks.php'?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php }?>
        
    </div>

</section>