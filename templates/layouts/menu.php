<nav class="wrapper-nav__menu d-none-m d-none-tablet">



    <div class="col l-12 m-12 c-12">

        <ul class="nav-menu d-flex justify-content-evenly">

            <li class="<?php if($com=='' || $com=='index') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="" title="Trang chủ" rel="dofollow"><img src="./assets/images/tienIMG/menuhomeW.png"
                            alt="SKAIA" class="iconHeader"></a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="gioi-thieu" title="Giới thiệu" rel="dofollow">GIỚI THIỆU</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <li class="<?php if($com=='du-an') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="du-an" title="DỰ ÁN" rel="dofollow">DỰ ÁN</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
                <?php if(count($service_footer)>0){?>
                <ul>
                    <?php
                                    foreach($service_footer as $key =>$vc2){ ?>
                    <li class="p-relative">

                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        <h4>

                            <?php }?>

                            <a href="<?= $vc2['type']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        </h4>

                        <?php }?>




                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li class="<?php if($com=='dich-vu') echo ' active';?>">
                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2>
                    <?php }?>
                    <a href="dich-vu" title="DỊCH VỤ" rel="dofollow">DỊCH VỤ</a>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>
            </li>

            <!---->
            <li class="col-2">
                <div class="box_logo">
                    <a href="" class="p-relative logo_header ratio-img" img-width="147" img-height="79">

                        <img src="./assets/images/loading_image.svg" data-src="<?=_upload_hinhanh_l.$logo["photo"]?>"
                            alt="Logo trang chủ" class="ratio-img__content img-scale">


                    </a>
                </div>
            </li>

            <!---->

            <li class="<?php if($com=='bao-gia') echo ' active';?>">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="bao-gia" title="BÁO GÍA" rel="dofollow">BÁO GIÁ</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>
                <?php if(count($baogia)>0){?>
                <ul>
                    <?php
                                    foreach($baogia as $key =>$vc2){ ?>
                    <li class="p-relative">

                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        <h4>

                            <?php }?>

                            <a href="<?= $vc2['type']?>/<?= $vc2['tenkhongdau']?>" rel="dofollow"
                                title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>

                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        </h4>

                        <?php }?>




                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>

                <?php
                /*
                <?php if(count($baogiam_c1)>0){?>

                <ul class="">

                    <?php foreach($baogiam_c1 as $k => $v){
                
                            ?>

                    <li class="p-relative">

                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        <h3>

                            <?php }?>

                            <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>" rel="dofollow"
                                title="<?= $v['ten']?>"><?= $v['ten']?></a>

                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                        </h3>

                        <?php }?>

                    </li>

                    <?php }?>

                </ul>

                <?php }?>
                */
                ?>

            </li>


            <li class="<?php if($com=='hang-muc') echo ' active';?>">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="hang-muc" title="HẠNG MỤC" rel="dofollow">HẠNG MỤC</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>
            </li>

            <li class="<?php if($com=='tin-tuc') echo ' active';?>">

                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                <h2>

                    <?php }?>

                    <a href="tin-tuc" title="Tin tức" rel="dofollow">TIN TỨC</a>

                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>

                </h2>

                <?php }?>
            </li>


            <li class="search pt15">
                <span class="search-Click">

                    <img src="./assets/images/tienIMG/searchW.png" class="iconHeader">

                </span>

                <div class="nav-menu__formsearchheader d-flex align-items-center">

                    <input role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm">

                    <button class="nav-menu__formsearchheader-button" data-btn-search-pc="" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button>

                </div>
            </li>



        </ul>

    </div>



</nav>