<style>
.bottom-contact {
    position: fixed;
    bottom: 0;
    background: var(--html-bg-website);
    width: 100%;
    z-index: 99;
    box-shadow: 2px 1px 9px #dedede;
    border-top: 1px solid #eaeaea;
}

.bottom-contact ul li {
    width: 20%;
    float: left;
    list-style: none;
    text-align: center;
    font-size: 13.5px;
    margin-left: 0px;
    margin-bottom: 0.6rem
}

.bottom-contact ul li img {
    width: 35px;
    margin-top: 0.6rem;
    margin-bottom: 0px;
}

.bottom-contact ul li span {
    color: black;
}
a#icon__cart {
    margin-top: 3px;
    display: inline-block;
}
</style>
<div class="bottom-contact d-none d-block-m">
    <ul>
        <li>
            <a id="goidien" href="tel: <?=str_replace(' ','',str_replace('.','',$row_setting["hotline"]))?> ">
                <img src="assets/images/tool/icon-phone2.png">
                <br>
                <span>Gọi điện</span>
            </a>
        </li>
        <li>
            <a id="nhantin" href="sms: <?=str_replace(' ','',str_replace('.','',$row_setting["hotline"]))?>">
                <img src="assets/images/tool/icon-sms2.png">
                <br>
                <span>Nhắn tin</span>
            </a>
        </li>
        <li>
            <a id="chatzalo" href=" https://zalo.me/<?=str_replace(' ','',str_replace('.','',$row_setting["sozalo"]))?>">
                <img src="assets/images/tool/icon-zalo2.png">
                <br>
                <span>Chat zalo</span>
            </a>
        </li>
        <li>
            <a id="chatfb" href=" https://m.me/<?=$row_setting["linkmessage"]?>">
                <img src="assets/images/tool/icon-mesenger2.png">
                <br>
                <span>Facebook</span>
            </a>
        </li>
        <li>
            <a id="icon__cart" href="carts?src=gio-hang" style="display: inline-block;margin-top: 3px;position:relative">
                <img src="assets/images/tool/cart.png" style="width:25px">
                <br>
                <span style="margin-top:3px;display:inline-block">Giỏ hàng</span>
                <span class="wrapper-cart__menu-img-qty wrapper-cart__menu-img-qty--mobile view-cart"><?=$cart->getTotalQuality()?></span>
            </a>
        </li>
    </ul>
</div>