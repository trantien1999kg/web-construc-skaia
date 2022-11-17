<?php

    $desc_detail=$db->rawQueryOne("select * from #_company where type=? limit 0,1",array('desc-detail'));

?>

<div class="item col-3 d-none-m d-none-tablet">

    <div class="sidebar-detail">

        <div class="header-sidebar">

            <span>Hỗ trợ khách hàng</span>

        </div>

        <div class="body-sidebar pd10 p-relative">

            <div class="des">

                <?=htmLspecialChars_decode($desc_detail['mota_'.$lang])?>
            
            </div>
           
            <div class="box-under">

                <div style="font-weight:600;" class="t-center t-uppercase">YÊU CẦU GỌI LẠI</div>
               
                <div class="letter-form">

                    <input type="number" autocomplete="off" name="txt-phone-detail" class="input-txt txt-input-number"
                        placeholder=" Nhập số điện thoại" />

                        <button type="button" class="btn-newsletter call-back__detail">Gửi</button>
                
                </div>

            </div>


        </div>

    </div>

</div>