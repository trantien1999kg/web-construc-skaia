<?php

    $hinhthuc=$db->rawQuery("select id, ten_$lang,tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet where hienthi=1 and type=? order by stt asc, id desc",array('giao-hang'));

    $hotros=$db->rawQuery("select id, ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,photo,type,ngaytao from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('ho-tro'));


?>
<style>
ol#breadcrumb {
    margin: 0;
    margin-bottom: 15px;
}
</style>

<section class="product-detail__sc" id="detail-product">
    <div class="container">
        <form method="post" data-role="add-to-cart" enctype="multipart/form-data" onsubmit="return false"
            name="product-detail-<?=$row_detail['id']?>" id="product-detail-<?=$row_detail['id']?>">
            <input type="hidden" name="src" value="addCart">
            <input type="hidden" name="pid" value="<?=$row_detail['id']?>">
            <div class="row10 d-flex flex-wrap">
                <div class="item10 col-9 w-100-m w-100-t">

                    <div class="product-detail__sc-aside-left">

                        <div class="row10">
                            <div class="item10 col-12">
                                <div class="breadcumb">
                                    <?=$str_breadcrumbs?>
                                </div>
                            </div>
                        </div>
                        <div class="row10 d-flex flex-wrap">

                            <div class="item10 col-6 w-100-m">

                                <div class="img-top">

                                    <a href="thumbs/800x600x1/<?=_upload_baiviet_l.$row_detail['photo']?>"
                                        class="MagicZoom" id="Zoom-1"
                                        data-options="variableZoom: true;expand: on; hint: always; ">

                                        <img class="col-12"
                                            src="thumbs/800x600x1/<?=_upload_baiviet_l.$row_detail['photo']?>"
                                            alt="<?=$row_detail['ten_'.$lang]?>" />

                                    </a>

                                </div>

                                <?php if(count($photos)>0){ ?>

                                <div class="img-bottom">

                                    <div class="product-detail-slider owl-carousel owl-theme owl-carousel-loop in-home"
                                        data-height="575" data-dot="1" data-nav='0' data-loop='0' data-play='1'
                                        data-lg-items='4' data-md-items='4' data-sm-items='4' data-xs-items="4"
                                        data-margin='10'>

                                        <div class="items mb20">
                                            <div class="img"><a data-zoom-id="Zoom-1"
                                                    href="<?=_upload_baiviet_l.$row_detail['photo']?>"
                                                    data-image="thumbs/800x600x1/<?=_upload_baiviet_l.$row_detail['photo']?>"><img
                                                        loading="lazy" <?= $func->errorImg() ?>
                                                        src="<?=_upload_baiviet_l.$row_detail['thumb']?>"
                                                        alt="<?=$row_detail['ten_'.$lang]?>"></a></div>
                                        </div>

                                        <?php 
                                            foreach($photos as $k=>$v){  
                                        ?>

                                        <div class="items mb20">
                                            <div class="img"><a data-zoom-id="Zoom-1"
                                                    href="<?=_upload_baiviet_l.$v['photo']?>"
                                                    data-image="thumbs/800x600x1/<?=_upload_baiviet_l.$v['photo']?>"><img
                                                        loading="lazy"
                                                        src="thumbs/800x600x1/<?=_upload_baiviet_l.$v['photo']?>"
                                                        alt="<?=$row_detail['ten_'.$lang]?>"></a></div>
                                        </div>

                                        <?php } ?>

                                    </div>

                                </div>

                                <?php } ?>

                            </div>
                            <div class="item10 col-6 w-100-m">

                                <div class="row10">

                                    <div class="item10 col-12">
                                        <div class="box-detail mt20i">
                                            <h1 class="mg0">
                                                <span><?=$row_detail['ten_'.$lang]?></span>
                                            </h1>
                                            <ul>
                                                <?php if($row_detail["giacu"]!= 0) { ?>
                                                <li>
                                                    <div class="row10 d-flex">
                                                        <div class="item10 col-12">
                                                            <div class="wrapper-product__detail-content">
                                                                <span
                                                                    class="wrapper-product__detail-content-price-old"><i
                                                                        class="fa-regular fa-money-bill-1-wave mr10"></i>
                                                                    <del><strong>Giá cũ:</strong>
                                                                        <b><?=$func->FormatBDSMoney($row_detail["giacu"]);?></b></span></del>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                                <?php if($row_detail["giaban"]!= 0) { ?>
                                                <li>
                                                    <div class="row10 d-flex">
                                                        <div class="item10 col-12">
                                                            <div class="wrapper-product__detail-content">
                                                                <span class="wrapper-product__detail-content-price"><i
                                                                        class="fa-regular fa-money-bill-1-wave mr10"></i>
                                                                    <strong>Giá bán:</strong>
                                                                    <b><?=$func->FormatBDSMoney($row_detail["giaban"]);?></b></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } else {?>
                                                <li><a href="lien-he">
                                                        <div class="row10 d-flex">
                                                            <div class="item10 col-12">
                                                                <div class="wrapper-product__detail-content">
                                                                    <span
                                                                        class="wrapper-product__detail-content-price">
                                                                        <strong>LIÊN HỆ BÁO GIÁ</strong>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                <?php
                                                
                                                    $ld_detail = $db->rawQueryOne("select id,ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=? limit 0,1",array('loai-dat',$row_detail["loaidat"]));

                                                ?>



                                                <li>

                                                    <div class="row10 d-flex">

                                                        <div class="item10 col-12">

                                                            <div class="box-detail-content-description">
                                                                <?=htmlspecialchars_decode($row_detail["mota_$lang"])?>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </li>

                                                <li>
                                                    <div class="row10 d-flex">
                                                        <div class="item10 col-6">
                                                            <div class="wrappers-product__status">
                                                                <span
                                                                    class="<?php if($row_detail['id_loai']==2){echo 'active';}else{echo 'noactive';}  ?>">
                                                                    <?php if($row_detail['id_loai']==2){echo '<i class="fa-light fa-timer mr5"></i>';}else{echo '<i class="fa-solid fa-check mr5"></i>';}  ?>
                                                                    <?php if($row_detail['id_loai']==2){echo 'Đã bán';}else{echo 'Còn hàng';}  ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="item10 col-6">
                                                            <div class="wrappers-product__status">
                                                                <span class="noactive"><i
                                                                        class="fa-sharp fa-solid fa-eye mr5"></i> Lượt
                                                                    xem: <?=$row_detail["luotxem"]?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li style="border:0">
                                                    <div class="row10 d-flex">
                                                        <div class="item10 col-12">
                                                            <div class="contact-phone">
                                                                <ul>
                                                                    <li class="w-100-m">
                                                                        <a target="_blank"
                                                                            href="https://zalo.me/<?=($row_detail['sodienthoai']!='') ? str_replace(' ','',$row_detail['sodienthoai']) : str_replace(' ','',$row_setting['hotline'])?>">
                                                                            <p class="mb0"> <i class="fa fa-comment"
                                                                                    style="color:#fff"></i> Chat zalo
                                                                            </p>
                                                                            <p>Giải đáp hỗ trợ ngay tức thì</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mt10i w-100-m">
                                                                        <a target="_blank"
                                                                            href="https://m.me/<?=$row_setting['linkmessage']?>">
                                                                            <p class="mb0"> <i
                                                                                    class="fa-brands fa-facebook"
                                                                                    style="color:#fff;"></i> Chat
                                                                                facebook</p>
                                                                            <p>Giải đáp hỗ trợ ngay tức thì</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>


                                                <?php if($config['cart-advance']){?>
                                                <li>
                                                    <div
                                                        class="bg-cart-fix d-flex justify-content-center align-items-center mt10 mb10 center">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="mr5">Số lượng: </div>
                                                            <div class="mr10">
                                                                <span>
                                                                    <div class="wrap_qty">
                                                                        <span class="down"
                                                                            onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty) && qty>1){result.value--}else{return false;}">-</span>
                                                                        <input type="text" class="input-text qty"
                                                                            name="quality" id="qty" value="1"
                                                                            title="Số lượng" maxlength="6" min="1">
                                                                        <span class="up"
                                                                            onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty)){result.value++}else{return false;}">+</span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <button type="button"
                                                            data-el="#product-detail-<?=$row_detail['id']?>"
                                                            class="btn-cart-css btn-buynow cs-pointer w-100i mt10i">Mua
                                                            ngay</button>
                                                        <div class="phone-cart ml10 mt10i ml0i d-none-m">
                                                            <span style="display:inline-block;margin-right:10px"></span>
                                                            <span class="hotline-detail">
                                                                <i class="fa fa-phone"></i>
                                                                <a href="tel:<?=str_replace(' ','',$row_setting['hotline'])?>"
                                                                    title=""><?=$row_setting['hotline']?></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php }?>

                                                <li style="border:none">

                                                    <div class="row10 d-flex flex-wrap">

                                                        <?php foreach($hotros as $key => $value){?>

                                                        <div class="item10 col-6 ">

                                                            <div class="box">

                                                                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>"
                                                                    title="<?=$value["ten_$lang"]?>">

                                                                    <i class="fa-regular fa-square-check"
                                                                        style="color:var(--html-bg-website);"></i>&nbsp;<?=$value["ten_$lang"]?>

                                                                </a>

                                                            </div>



                                                        </div>



                                                        <?php }?>

                                                    </div>

                                                </li>

                                                <li style="border:none">

                                                    <div class="row10 d-flex flex-wrap">

                                                        <?php foreach($hinhthuc as $key => $val){?>

                                                        <div class="item10 col-6 w-100-m">

                                                            <div class="bg-s t-uppercase">

                                                                <a class="d-flex align-items-center"
                                                                    href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>"
                                                                    title="<?=$val["ten_$lang"]?>">

                                                                    <div><img height="22" width="31"
                                                                            src="<?=_upload_baiviet_l.$val["photo"]?>"
                                                                            alt="" /></div>

                                                                    <div><?=$val["ten_$lang"]?></div>

                                                                </a>

                                                            </div>

                                                        </div>

                                                        <?php }?>

                                                    </div>

                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-desc-detail mt20">

                            <div class="row10">

                                <div class="item10 col-12">

                                    <div class="box-des-details mt-30">

                                        <div class="tab">

                                            <button class="tablinks active" data-target="ThongTinSanPham">THÔNG TIN CHI
                                                TIẾT</button>

                                            <?php if($row_detail["iframe_map"]!=''){ ?>

                                            <button class="tablinks" data-target="GOOGLEMAP">GOOGLE MAP</button>

                                            <?php }?>

                                        </div>

                                        <div id="ThongTinSanPham" class="tabcontent">

                                            <div class="wrapper-toc">

                                                <div class="content descript">

                                                    <?php if($row_detail['noidung_'.$lang]!=''){ ?>

                                                    <?= htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                                                    <?php }else{ ?>

                                                    <p class="t-center">Nội dung đang được cập nhật....</p>

                                                    <?php }?>

                                                </div>

                                                <div class="mt10">
                                                    <?php include_once _source.'shareLinks.php'?>
                                                </div>

                                            </div>

                                        </div>

                                        <?php if($row_detail["iframe_map"]!=''){ ?>

                                        <div id="GOOGLEMAP" class="tabcontent">

                                            <?=htmlspecialchars_decode($row_detail["iframe_map"])?>

                                        </div>

                                        <?php }?>

                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

                <div class="item10 col-3 w-100-m w-100-t">

                    <?php include _layouts."sidebar_tpl.php"; ?>

                </div>

            </div>

        </form>

    </div>

</section>


<script type="text/javascript">
var buttons = document.getElementsByClassName('tablinks');
var contents = document.getElementsByClassName('tabcontent');

function showContent(id) {
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = 'none';
    }
    var content = document.getElementById(id);
    content.style.display = 'block';
}
for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        var id = this.getAttribute('data-target');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }
        this.className += " active";
        showContent(id);
    });
}
showContent('ThongTinSanPham');
</script>