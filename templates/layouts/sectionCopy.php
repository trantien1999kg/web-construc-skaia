<section class="section-copy">

    <div class="container">

        <div class="row">

            <div class="item col-12">

                <div class="content-copy pt10 pb10 d-flex justify-content-center flex-wrap align-items-center">

                    <div class="copy-text cl-white">Copyright &copy; 2022 - <b class="copy-text--company"><?=$row_setting['name_'.$lang]?></b>. All

                        rights reserved. <a href="https://i-web.vn/" class="cl-white" target="_blank" title="">Design

                            by

                            i-web.vn</a>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>

<div class="box__tool__fixed d-none-m">
    <ul>
        <li>
            <a href="tel:<?=str_replace(' ','',str_replace('.','',$row_setting["hotline"]))?>" title="">
                <img class="mr10" src="assets/images/phone_svg.png" alt="Phone"/>
                <span><?=$row_setting["hotline"]?></span>
            </a>
        </li>
        <li>
            <a href="tel:<?=str_replace(' ','',str_replace('.','',$row_setting["sozalo"]))?>" title="">
                <img class="mr10" src="assets/images/zalo_svg.png" alt="Phone"/>
                <span><?=$row_setting["sozalo"]?></span>
            </a>
        </li>
        <li>
            <a href="bao-gia" target="_blank" title="">
                <img class="mr10" src="assets/images/baogia_svg.png" alt="báo giá"/>
                <span>Bảng giá thiết kế xây dựng</span>
            </a>
        </li>
        <li>
            <a href="bao-gia" target="_blank" title="">
                <img class="mr10" src="assets/images/banggia_svg.png" alt="Bảng giá thi công"/>
                <span>Bảng giá thi công</span>
            </a>
        </li>
    </ul>
</div>

