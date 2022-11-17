<?php

    $kygui = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet where hienthi=1 and type=? and noibat=1 order by stt asc",array('ky-gui'));

    $tintuc = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? and noibat=1 order by stt asc",array('tin-tuc'));

?>

<div class="realestate-sale__sidebar">



    <div class="realestate-sale__sidebar__top mb20 mt-m-20">

        <div class="realestate-sale__sidebar__top-title">

            <span>TIN TỨC VÀ SỰ KIỆN</span>

        </div>

        <div class="realestate-sale__sidebar__top-box realestate-sale__sidebar__top-box--mobile">

          <?php foreach($tintuc as $key => $value){ ?>

          <div class="realestate-sale__sidebar__top-box-aside d-flex flex-wrap mb20">

            <div class="realestate-sale__sidebar__top-box-aside-img">

                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten"]?>" class="d-block hover-left ratio-img" img-width="117" img-height="85">

                    <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten"]?>" <?=$func->errorImg()?>>

                </a>

            </div>

            <div class="realestate-sale__sidebar__top-box-aside-detail">

               <h5 class="realestate-sale__sidebar__top-box-aside-detail-title line-4 line-4-m mg0">

                    <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten"]?>"><?=$value["ten"]?></a>

               </h5>

            </div>

          </div>

          <?php }?>
          
            <div class="realestate-sale__sidebar__top-box-view mt20">

                <a href="tin-tuc" rel="dofollow" title="Xem tất cả">Xem tất cả</a>

            </div>


        </div>

    </div>

    <div class="realestate-sale__sidebar__top mb20">

        <div class="realestate-sale__sidebar__top-title">

            <div class="mg0">

                <a href="ky-gui" rel="dofollow" title="DỰ ÁN THI CÔNG">SẢN PHẨM KHÁC</a>

            </div>

        </div>

        <div class="realestate-sale__sidebar__top-box realestate-sale__sidebar__top-box--mobile">

            <ul class="realestate-sale__sidebar__top-box-list">

                <?php foreach($product as $key => $value){ ?>

                <li class="realestate-sale__sidebar__top-box-items">

                    <h3 class="mg0 realestate-sale__sidebar__top-box-title realestate-sale__sidebar__top-box-title--services line-2">

                        <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten"]?>"><?=$value["ten"]?></a>

                    </h3>

                </li>

                <?php }?>

            </ul>

            <div class="realestate-sale__sidebar__top-box-view mt20">

                <a href="du-an" rel="dofollow" title="Xem tất cả">Xem tất cả</a>

            </div>

        </div>

    </div>

</div>