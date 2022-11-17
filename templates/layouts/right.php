<div class="col l-3 m-4 c-12">

    <div class="wrapper-sidebar__right mt30">

        <div class="wrapper__bg__bray">
            <div class="wrapper-sidebar__right-title">

                <span>Bài viết liên quan</span>

            </div>

            <div class="wrapper-sidebar__right-detail mt10">

                <ul class="wrapper-sidebar__right-detail-list">

                    <?php foreach($tintuc as $key => $vtt){ ?>

                    <li>

                        <div class="wrapper-sidebar__right-detail__box d-flex flex-wrap">

                            <div class="wrapper-sidebar__right-detail__box-img">

                                <a href="<?=$vtt["type"]?>/<?=$vtt["tenkhongdau"]?>" class="d-block hover-left"
                                    rel="dofollow" title="<?=$vtt["ten"]?>">

                                    <img src="<?=_upload_baiviet_l.$vtt["photo"]?>" alt="<?=$vtt["ten"]?>"
                                        <?=$func->errorImg()?>>

                                </a>

                            </div>



                            <div class="wrapper-sidebar__right-detail__box-content">

                                <h5 class="line-2 line-4-m wrapper-sidebar__right-detail__box-content-title mg0">

                                    <a href="<?=$vtt["type"]?>/<?=$vtt["tenkhongdau"]?>" rel="dofollow"
                                        title="<?=$vtt["ten_$lang"]?>"><?=$vtt["ten_$lang"]?></a>

                                </h5>

                                <div class="wrapper-sidebar__right-detail__box-content-time">

                                    <span><i class="fa-solid fa-clock"></i> <?=$func->timeAgo($vtt['ngaytao'])?></span>

                                </div>

                            </div>

                        </div>

                    </li>

                    <?php }?>

                </ul>

            </div>
        </div>

    </div>

    <?php /*<div class="baogia-aside">

        <div class="baogia">

            <span>Đăng ký báo giá</span>

            <div class="box area-baogia">

                <input type="text" name="fullname2" autocomplete="off" class="input-baogia mb20" placeholder="Họ và tên * ">

                <input type="text" name="email2" autocomplete="off" class="input-baogia mb20" placeholder="Email">

                <input type="text" name="phone2" autocomplete="off" class="input-baogia mb20" placeholder="Số điện thoại * ">

                <textarea type="text" name="content2" autocomplete="off" class="input-baogia" placeholder="Nội dung"></textarea>

                <div class="d-flex justify-content-center">

                    <button type="button" class="btn-baogia">Gửi ngay</button>

                </div>

            </div>

        </div>

    </div> */ ?>

</div>