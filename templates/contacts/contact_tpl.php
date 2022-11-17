<?php

 $ha_lienhe = $func->OneDataPhoto(null,'ha-lienhe','limit 0,1',"object");                        // Hình ảnh liên hệ

?>

<div class="container">

    <div class="contact-main-page bg-white mt10 clearfix">

        <div class="wrapper-contact__aside-top mb20">

            <div class="row d-flex flex-wrap">

                <div class="item col-6 w-100-m">

                    <div class="contact__top-img">

                        <span class="d-block hover-left ratio-img" img-width="570" img-height="300">

                            <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_hinhanh_l.$ha_lienhe->photo?>" alt="Hình ảnh liên hệ" <?=$func->errorImg()?>>

                        </span>

                    </div>

                </div>


                <div class="item col-6 w-100-m">

                    <div class="contact-page-side-content">

                    <h3 class="contact-page-title t-uppercase"><?=_thongtinlienhe?></h3>

                    <div class="contact-page-message mt20">

                        <?=htmlspecialchars_decode($row_contact['mota_'.$lang])?>

                    </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="box-contact pd10 clearfix">

            <div class="row d-flex flex-wrap">

                <div class="item col-6 w-100-m w-100-t">

                    <div class="contact-form-content pt-sm-55 pt-xs-55">

                        <h3 class="contact-page-title mg-0 t-uppercase">Gửi thư đến chúng tôi</h3>

                        <div class="contact-form mt20">

                            <div class="row d-flex flex-wrap">

                                <div class="item col-6 w-100-m">

                                    <div class="form-group">

                                        <input type="text" name="data[fullname]" class="css-input" id="customername" placeholder="Họ tên">

                                    </div>

                                    <div class="form-group">

                                        <input type="email" name="data[email]" class="css-input" id="customerEmail" required placeholder="Email">

                                    </div>

                                    <div class="form-group">

                                        <input type="number" name="data[phone]" class="txt-input-number css-input" id="customerPhone"

                                            required placeholder="Số điện thoại">

                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="data[address]" class="customerAddress css-input" id="contactSubject"

                                            required placeholder="Địa chỉ">

                                    </div>

                                    <div class="form-group mt-30">

                                        <div class="box">

                                            <div class="row d-flex">

                                                <div class="item col-5">

                                                    <img height="40" class="cs-pointer" src="img.php" onclick="$(this).attr('src', 'img.php?rand=' + Math.random())" alt="Mã capcha"/>

                                                </div>

                                                <div class="item col-7">

                                                    <input type="text" name="data[capcha]" class="capcha css-input" id="contactCapcha"

                                                        required placeholder="Nhập mã bảo mật">

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="item col-6 w-100-m">

                                    <div class="form-group">

                                        <textarea name="data[content]" id="contactMessage" class="css-input" placeholder="Nội dung"></textarea>

                                    </div>

                                    <div class="form-group">

                                        <button type="button" id="submit-contact" class="li-btn-3"><?=_guithongtin?></button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="item col-6 w-100-m w-100-t">

                    <div class="">

                        <div class="bg-white clearfix">

                            <div class="">

                                <div id="google-map" class="mb10 o-hidden clearfix">

                                    <?=htmlspecialchars_decode($row_setting['iframe_map'])?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>