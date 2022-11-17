<?php 

    $bg_tintuc = $func->OneDataPhoto(null,'bg_tintuc','limit 0,1',"object");                                    // Background tin tức

    $bg_banner = $func->OneDataPhoto("mota_$lang as mota,",'bg-slider','limit 0,1',"object");                                    // Background tin tức

    $bg_boloc = $func->OneDataPhoto(null,'bg-boloc','limit 0,1',"object");                                    // Background tin tức

    $bg_motadangky = $func->OneDataPhoto("mota_$lang as mota,",'bg-motadangky','limit 0,1',"object");                                    // Background tin tức

    $bg_gioithieu = $func->OneDataPhoto(null,'bg_gioithieu','limit 0,1',"object");                              // Background giới thiệu

    $ha_gioithieu = $func->OneDataPhoto(null,'ha-gioithieu','limit 0,1',"object");                              // Hình ảnh giới thiệu
   
   

    $anhgiaodich = $func->AllData('id,id_list,luotxem,','anh-giao-dich','','','array');              // Lấy toàn bộ dịch vụ
    

?>




<section class="wrapper-introduces wow fadeInRight" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s">

    <div class="grid wide">

        <div class="row">

            <?php if($deviceType != 'phone') {?>
            <!-- DEVICETYPE COMPUTER -->
            <!-- DEVICETYPE COMPUTER -->
            <!-- DEVICETYPE COMPUTER -->
            <div class="col-12 item grid-introduce">


                <div class="col-12">

                    <div class="wrapper-introduces__img p-relative">

                        <a href="gioi-thieu" class="d-block" rel="dofollow" title="Giới thiệu">



                            <div class="wrapper-introduces__img-small">

                                <span class="hover-left d-block ratio-img" img-width="637" img-height="439">

                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$about["photo"]?>" alt="<?=$about["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </span>

                            </div>

                        </a>

                    </div>

                </div>
                <div class="col-12">

                    <div class="wrapper-introduces__title display-flex ml5 mb25">

                        <img src="<?= _upload_hinhanh_l.$icon_GT['photo']?>" alt="<?= $about["ten"]?>">
                        <div class="name_title_introduce ml25">
                            <div class="name_Introduces">
                                Giới thiệu
                            </div>
                            <div class="title_introduce mt5">
                                <?= $about["ten"]?>
                            </div>

                        </div>

                    </div>

                    <div class="wrapper-introduces__title-des"><?= htmlspecialchars_decode($about["mota"])?></div>


                    <div class="button_introduces mt35">
                        <a href="gioi-thieu" class="link_slider" rel="nofollow">XEM THÊM</a>
                        <span class="border-button"></span>
                    </div>

                </div>

            </div>
            <div class="col-12 item video_why">
                <div class="video_introduce col-7">
                    <div class="col-2 iconVIDEO mt100">
                        <div class="box_iconVIDEO">
                            <a href="<?=$video["links"]?>" id="linkchange" data-fancybox="video"
                                class="d-block ratio-img" img-width="83" img-height="83">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_hinhanh_l.$icon_VIDEO["photo"]?>"
                                    alt="<?=$icon_VIDEO["ten"]?>">
                            </a>
                        </div>
                        <div class="text_iconVIDEO mt15">
                            Xem video
                        </div>
                    </div>
                    <div class="col-5 imgVIDEO">
                        <div class="box_imgVIDEO">
                            <a href="<?=$video["links"]?>" id="linkchange" data-fancybox="video"
                                class="d-block ratio-img" img-width="563" img-height="360">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_hinhanh_l.$video["photo"]?>" alt="<?=$video["ten"]?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5 why">
                    <div class="owl-carousel owl-theme" id="owl-why">
                        <?php foreach($taisao as $k=>$v){ $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                        <div class="box_why">
                            <div class="box_img_why">
                                <span class="d-block ratio-img" img-width="67" img-height="67">
                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </span>
                            </div>
                            <div class="title_desc_why mt20">
                                <div class="title_why line-1 mb20">
                                    <?=$v["ten"]?>
                                </div>
                                <div class="desc_why line-3">
                                    <?=$seoDB["description_$lang"]?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <?php }else{ ?>
            <!-- DEVICETYPE PHONE -->
            <!-- DEVICETYPE PHONE -->
            <!-- DEVICETYPE PHONE -->
            <div class="col-12 item grid-introduce">


                <div class="col-12">

                    <div class="wrapper-introduces__img p-relative">

                        <a href="gioi-thieu" class="d-block" rel="dofollow" title="Giới thiệu">



                            <div class="wrapper-introduces__img-small">

                                <span class="hover-left d-block ratio-img" img-width="637" img-height="439">

                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_hinhanh_l.$about["photo"]?>" alt="<?=$about["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </span>

                            </div>

                        </a>

                    </div>

                </div>
                <div class="col-12">

                    <div class="wrapper-introduces__title display-flex ml5 mb25">

                        <img src="<?= _upload_hinhanh_l.$icon_GT['photo']?>" alt="<?= $about["ten"]?>">
                        <div class="name_title_introduce ml25">
                            <div class="name_Introduces">
                                Giới thiệu
                            </div>
                            <div class="title_introduce mt5">
                                <?= $about["ten"]?>
                            </div>

                        </div>

                    </div>

                    <div class="wrapper-introduces__title-des"><?= htmlspecialchars_decode($about["mota"])?></div>


                    <div class="button_introduces mt35">
                        <a href="gioi-thieu" class="link_slider" rel="nofollow">XEM THÊM</a>
                        <span class="border-button"></span>
                    </div>

                </div>

            </div>
            <div class="col-12 item">
                <div class="col-12 pt40mobile pb40mobile">

                    <div class="col-12 imgVIDEO_m">
                        <div class="box_imgVIDEO_m">
                            <a href="<?=$video["links"]?>" id="linkchange" data-fancybox="video"
                                class="d-block ratio-img" img-width="563" img-height="360">
                                <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_hinhanh_l.$video["photo"]?>" alt="<?=$video["ten"]?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 pb40mobile">
                    <div class="owl-carousel owl-theme" id="owl-why">
                        <?php foreach($taisao as $k=>$v){ $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                        <div class="box_why">
                            <div class="box_img_why">
                                <span class="d-block ratio-img" img-width="67" img-height="67">
                                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                        data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </span>
                            </div>
                            <div class="title_desc_why mt20">
                                <div class="title_why line-1 mb20">
                                    <?=$v["ten"]?>
                                </div>
                                <div class="desc_why line-3">
                                    <?=$seoDB["description_$lang"]?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>


            <?php } ?>

        </div>

    </div>

</section>
<section class="exp pt25 pb25" style="background-color: var(--html-bg-website) ;">
    <div class="container">
        <div class="row">
            <div class="col-12 item grid-exp">
                <?php for($i=0;$i<count($introTop);$i++){ ?>
                <div class="col-12 box_exp">
                    <div class="col-4 box_exp_img">
                        <span class="d-block ratio-img" img-width="90" img-height="90">
                            <img class="ratio-img__content img-scale img_why_spin"
                                src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_hinhanh_l.$introTop[$i]["photo"]?>" alt="<?=$introTop[$i]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </span>
                    </div>
                    <div class="box_title_numb_exp">
                        <div class="numb_exp mb10">+<span id="count<?=$i?>">0</span> 
                            <script>
                            var mydiv<?=$i?> = document.getElementById("count<?=$i?>");

                            var timeCurrent<?=$i?> = <?=$introTop[$i]["number"]?>;

                            var checkTime<?=$i?> = 0;

                            if (timeCurrent<?=$i?> < 50) {

                                checkTime<?=$i?> = 100;

                            } else {

                                checkTime<?=$i?> = 20;

                            }
                            var time<?=$i?> = setInterval(getcounter, checkTime<?=$i?>);

                            function getcounter() {

                                if (mydiv<?=$i?>.textContent >= timeCurrent<?=$i?>) {
                                    clearInterval(time<?=$i?>);
                                } else {
                                    mydiv<?=$i?>.textContent++;
                                }

                            }
                            </script>
                        </div>
                        <div class="title_exp">
                        <?=$introTop[$i]["ten"]?>
                        </div>

                    </div>
                    <span class="border-right"></span>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<section class="service pt40mobile">
    <div class="container">
        <div class="row">
            <?php foreach ($service_c1 as $key=>$value){ 
                    $seoDB = $seo->getSeoDB($value['id'],'baiviet','man_list',$value["type"]);
                    $service=$db->rawQuery("select id , ten_$lang as ten , job_$lang as job , tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where hienthi=1 and id_list=? limit 0,12",array($value['id']));
                    ?>
            <div class="col-12 item pt50 pb50">
                <div class="title_service_c1 mb20">
                    <div class="img_service_c1 mr15">
                        <img src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value['ten']?>">
                    </div>
                    <div class="name_service_c1">
                        <?=$value['ten']?>
                    </div>
                </div>
                <div class="desc_service_c1 line-3 col-12mobile col-8">
                    <?=$seoDB["description_$lang"]?>
                </div>
            </div>
            <div class="col-12 item grid-service pt40mobile pb40mobile">
                

                <div class="col-12 serv_1">
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[0]["type"]?>/<?=$service[0]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[0]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="445">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[0]["photo"]?>" alt="<?=$service[0]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[0]["type"]?>/<?=$service[0]["tenkhongdau"]?>"
                                    title="<?=$service[0]["ten"]?>"><?=$service[0]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[0]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[1]["type"]?>/<?=$service[1]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[1]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="339">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[1]["photo"]?>" alt="<?=$service[1]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[1]["type"]?>/<?=$service[1]["tenkhongdau"]?>"
                                    title="<?=$service[1]["ten"]?>"><?=$service[1]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[1]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv">
                        <a href="<?=$service[2]["type"]?>/<?=$service[2]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[2]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="339">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[2]["photo"]?>" alt="<?=$service[2]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[2]["type"]?>/<?=$service[2]["tenkhongdau"]?>"
                                    title="<?=$service[2]["ten"]?>"><?=$service[2]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[2]["job"]?></div>
                        </div>
                    </div>
                </div>


                <div class="col-12 serv_2">
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[3]["type"]?>/<?=$service[3]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[3]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="339">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[3]["photo"]?>" alt="<?=$service[3]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[3]["type"]?>/<?=$service[3]["tenkhongdau"]?>"
                                    title="<?=$service[3]["ten"]?>"><?=$service[3]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[3]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[4]["type"]?>/<?=$service[4]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[4]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="339">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[4]["photo"]?>" alt="<?=$service[4]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[4]["type"]?>/<?=$service[4]["tenkhongdau"]?>"
                                    title="<?=$service[4]["ten"]?>"><?=$service[4]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[4]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv">
                        <a href="<?=$service[5]["type"]?>/<?=$service[5]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[5]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="445">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[5]["photo"]?>" alt="<?=$service[5]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[5]["type"]?>/<?=$service[5]["tenkhongdau"]?>"
                                    title="<?=$service[5]["ten"]?>"><?=$service[5]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[5]["job"]?></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 serv_3">
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[6]["type"]?>/<?=$service[6]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[6]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="297">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[6]["photo"]?>" alt="<?=$service[6]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[6]["type"]?>/<?=$service[6]["tenkhongdau"]?>"
                                    title="<?=$service[6]["ten"]?>"><?=$service[6]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[6]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[7]["type"]?>/<?=$service[7]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[7]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="445">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[7]["photo"]?>" alt="<?=$service[7]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[7]["type"]?>/<?=$service[7]["tenkhongdau"]?>"
                                    title="<?=$service[7]["ten"]?>"><?=$service[7]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[7]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv">
                        <a href="<?=$service[8]["type"]?>/<?=$service[8]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[8]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="381">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[8]["photo"]?>" alt="<?=$service[8]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[8]["type"]?>/<?=$service[8]["tenkhongdau"]?>"
                                    title="<?=$service[8]["ten"]?>"><?=$service[8]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[8]["job"]?></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 serv_4">
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[9]["type"]?>/<?=$service[9]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[9]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="339">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[9]["photo"]?>" alt="<?=$service[9]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[9]["type"]?>/<?=$service[9]["tenkhongdau"]?>"
                                    title="<?=$service[9]["ten"]?>"><?=$service[9]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[9]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv mb2">
                        <a href="<?=$service[10]["type"]?>/<?=$service[10]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[10]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="445">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[10]["photo"]?>" alt="<?=$service[10]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[10]["type"]?>/<?=$service[10]["tenkhongdau"]?>"
                                    title="<?=$service[10]["ten"]?>"><?=$service[10]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[10]["job"]?></div>
                        </div>
                    </div>
                    <div class="col-12 box_serv">
                        <a href="<?=$service[11]["type"]?>/<?=$service[11]["tenkhongdau"]?>" rel="dofollow"
                            title="<?=$service[11]["ten"]?>" class="d-block hover-left ratio-img" img-width="334"
                            img-height="339">
                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg"
                                data-src="<?=_upload_baiviet_l.$service[11]["photo"]?>" alt="<?=$service[11]["ten"]?>"
                                <?=$func->errorImg()?>>
                        </a>
                        <div class="content_service">
                            <h2 class="title_service_h2 line-1 col-7"> <a
                                    href="<?=$service[11]["type"]?>/<?=$service[11]["tenkhongdau"]?>"
                                    title="<?=$service[11]["ten"]?>"><?=$service[11]["ten"]?></a> </h2>
                            <div class="teaser line-1 col-5"><?=$service[11]["job"]?></div>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="procedure pt60 pt40mobile pb40mobile">
    <div class="container">
        <div class="row">
            <?php if($deviceType != 'phone'){ ?>
            <div class="col-12 item grid-proce">
                <div class="col-12 title__desc_procedure">
                    <div class="title_procedure display-flex mb30">
                        <div class="img_procedure mr25">
                            <img src="<?=_upload_hinhanh_l.$icon_QT["photo"]?>" alt="QUY TRÌNH LÀM VIỆC">
                        </div>
                        <div class="name_procedure">
                            QUY TRÌNH LÀM VIỆC
                        </div>
                    </div>
                    <div class="desc_procedure line-6">
                        <?=$seoqt['description_'.$seolang]?>
                    </div>
                </div>
                <div class="col-12 box0_proce wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-12 box_procedure">
                        <div class="box_img_proce">
                            <span class="d-block ratio-img" img-width="85" img-height="85">
                                <img class="ratio-img__content objec-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$quytrinh[4]["photo"]?>"
                                    alt="<?=$quytrinh[4]["ten"]?>" <?=$func->errorImg()?>>
                            </span>
                        </div>
                        <div class="box_name_desc_proce mt20">
                            <div class="name_proce line-1">
                                <?=$quytrinh[4]["ten"]?>
                            </div>
                            <div class="desc_proce line-3 mt20">
                                <?=$quytrinh[4]["mota"]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 box1_proce wow fadeInUp" data-wow-delay="0.4s">
                    <div class="col-12 box_procedure">
                        <div class="box_img_proce">
                            <span class="d-block ratio-img" img-width="85" img-height="85">
                                <img class="ratio-img__content objec-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$quytrinh[3]["photo"]?>"
                                    alt="<?=$quytrinh[3]["ten"]?>" <?=$func->errorImg()?>>
                            </span>
                        </div>
                        <div class="box_name_desc_proce mt20">
                            <div class="name_proce line-1">
                                <?=$quytrinh[3]["ten"]?>
                            </div>
                            <div class="desc_proce line-3 mt20">
                                <?=$quytrinh[3]["mota"]?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 item grid-proce">
                <?php foreach ($quytrinh as $k => $v) {?>
                <?php if( $k < 3){ ?>
                <div class="col-12 box_proce_<?= $k ?> wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-12 box_procedure_all">
                        <div class="box_img_proce">
                            <span class="d-block ratio-img" img-width="85" img-height="85">
                                <img class="ratio-img__content objec-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </span>
                        </div>
                        <div class="box_name_desc_proce mt20">
                            <div class="name_proce line-1">
                                <?=$v["ten"]?>
                            </div>
                            <div class="desc_proce line-3 mt20">
                                <?=$v["mota"]?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php }?>
            </div>
            <?php }else{ ?>



            <div class="col-12 item grid-proce">
                <div class="col-12 title__desc_procedure">
                    <div class="title_procedure display-flex mb30">
                        <div class="img_procedure mr25">
                            <img src="<?=_upload_hinhanh_l.$icon_QT["photo"]?>" alt="QUY TRÌNH LÀM VIỆC">
                        </div>
                        <div class="name_procedure">
                            QUY TRÌNH LÀM VIỆC
                        </div>
                    </div>
                    <div class="desc_procedure line-6">
                        <?=$seoqt['description_'.$seolang]?>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-12 box_procedure mb5">
                        <div class="box_img_proce">
                            <span class="d-block ratio-img" img-width="85" img-height="85">
                                <img class="ratio-img__content objec-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$quytrinh[4]["photo"]?>"
                                    alt="<?=$quytrinh[4]["ten"]?>" <?=$func->errorImg()?>>
                            </span>
                        </div>
                        <div class="box_name_desc_proce mt20">
                            <div class="name_proce line-1">
                                <?=$quytrinh[4]["ten"]?>
                            </div>
                            <div class="desc_proce line-3 mt20">
                                <?=$quytrinh[4]["mota"]?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 item grid-proce">
                <?php foreach ($quytrinha as $k => $v) {?>
                <?php if( $k > 0){ ?>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-12 box_procedure_all">
                        <div class="box_img_proce">
                            <span class="d-block ratio-img" img-width="85" img-height="85">
                                <img class="ratio-img__content objec-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </span>
                        </div>
                        <div class="box_name_desc_proce mt20">
                            <div class="name_proce line-1">
                                <?=$v["ten"]?>
                            </div>
                            <div class="desc_proce line-3 mt20">
                                <?=$v["mota"]?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php }?>
            </div>


            <?php } ?>
        </div>
    </div>
</section>


<section class="wrapper-register mb70 mt75 p-relative wow fadeInDown" data-wow-offset="50" data-wow-duration="3"
    data-wow-delay="0.2s"
    style="background:url('<?=_upload_hinhanh_l.$bg_dangky["photo"]?>') no-repeat center center/cover;">



    <div class="grid wide">

        <div class="row">

            <div class="item l-12 m-12 c-12 d-flex flex-column mb-m-20 mt-m-20">

                <div class="wrapper-register__box">

                    <div class="title_register mb20">
                        <div class="img_register mr20">
                            <img src="<?=_upload_hinhanh_l.$icon_DK["photo"]?>" alt="Đăng ký nhận tin">
                        </div>
                        <div class="name_register">
                            ĐỂ LẠI THÔNG TIN TƯ VẤN
                        </div>
                    </div>

                </div>
                <div class="col-10 col-12mobile box_register_input item grid-register">
                    <div class="wrapper-register__boxleft-form-row col-12">

                        <div class="l-12 m-12 c-12 mb20">
                            <input type="text" name="regis-index-fullname" placeholder="Nhập họ và tên">
                        </div>
                        <div class="l-12 m-12 c-12 mb20">
                            <input type="text" name="regis-index-email" placeholder="Nhập email">
                        </div>
                        <div class="l-12 m-12 c-12">
                            <textarea name="regis-index-content" cols="30" rows="5"
                                placeholder="Nhập nội dung"></textarea>
                        </div>

                    </div>

                    <div class="wrapper-register__boxright-form-row col-12">

                        <div class="l-12 m-6 c-12 mb20">
                            <input type="text" name="regis-index-phone" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="l-12 m-6 c-12 mb20">
                            <input type="text" name="regis-index-address" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="l-12 m-6 c-12 mb20 grid-2">
                            <div class="l-12">
                                <img height="40" class="cs-pointer capcha_index" src="img.php"
                                    onclick="$(this).attr('src', 'img.php?rand=' + Math.random())" alt="Mã capcha" />
                            </div>
                            <div class="l-12">
                                <input type="text" name="data[capcha]" class="capcha css-input" id="contactCapcha"
                                    required placeholder="Nhập mã bảo mật">
                            </div>
                        </div>
                        <div class="l-12 m-6 c-12">
                            <button class="p-relative link_register wrapper-regis-btn">GỬI NGAY</button>
                        </div>

                    </div>
                </div>
                <div class="col-10 d-none-m item box_register_input display-flex justify-content-between">
                    <?php foreach ($congcu as $k => $v) {?>
                    <div class="social_contact">
                        <div class="box_img_social">
                            <a href="" rel="dofollow" title="<?=$v["ten"]?>" class="d-block ratio-img" img-width="70"
                                img-height="70">
                                <img class="ratio-img__content objec-scale img-scale"
                                    src="./assets/images/loading_image.svg"
                                    data-src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                    <?=$func->errorImg()?>>
                            </a>
                        </div>
                        <div class="name_social pt10">
                            <?=$v["ten"]?>
                        </div>
                    </div>
                    <?php }?>
                </div>

            </div>

        </div>

    </div>

</section>



<section class="news_index pb55 pt40mobile">
    <div class="container">
        <div class="row">
            <div class="col-12 item">
                <div class="box_title_icon_new pb45">
                    <div class="box_title_new mb20">
                        KIẾN THỨC XÂY DỰNG
                    </div>
                    <div class="box_icon_new">
                        <img src="<?=_upload_hinhanh_l.$icon_KTXD["photo"]?>" class="icon_new" alt="KIẾN THỨC XÂY DỰNG">
                    </div>

                </div>
                <div class="owl-carousel owl-theme" id="owl-tintuc">
                    <?php foreach ($news as $k => $v) { $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);?>
                    <div class="pt10 pb10 wow fadeInUp" data-wow-delay="<?= $key*0.2 + 0.2?>s">
                        <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">
                            <div class="box_news">
                                <div class="box_img_news p-relative">
                                    <div class="box_calender">
                                        <div class="calender-top pb5"><?=date('d/m',$v["ngaytao"])?></div>
                                        <div class="calender-bottom pt5"><?=date('Y',$v["ngaytao"])?></div>
                                    </div>
                                    <span rel="dofollow" title="<?=$v["ten"]?>"
                                        class="d-block z-index-1 hover-left ratio-img" img-width="433.36"
                                        img-height="357.41">
                                        <img class="ratio-img__content img-scale"
                                            src="./assets/images/loading_image.svg"
                                            data-src="<?=_upload_baiviet_l.$v["photo"]?>" alt="<?=$v["ten"]?>"
                                            <?=$func->errorImg()?>>
                                    </span>
                                </div>
                                <div class="box_name_desc_news">
                                    <div class="title_company mb15">SKAIA STUDIO</div>
                                    <div class="box_name_news line-2 mb15"><?= $v['ten']?></div>
                                    <div class="box_desc_news line-4 mb25">
                                        <?=$seoDB["description_$lang"]?>
                                    </div>
                                    <div class="link_news">
                                        Tìm hiểu thêm <i class="far fa-long-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>