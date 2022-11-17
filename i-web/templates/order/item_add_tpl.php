<script type="text/javascript">
function update(id) {
    if (id > 0) {
        var sl = $('#product' + id).val();
        if (sl > 0) {
            $('#ajaxloader' + id).css('display', 'block');
            jQuery.ajax({
                type: 'POST',
                url: "ajax.php?do=cart&act=update",
                data: {
                    'id': id,
                    'sl': sl
                },
                success: function(data) {
                    $('#ajaxloader' + id).css('display', 'none');
                    var getData = $.parseJSON(data);
                    $('#id_price' + id).html(addCommas(getData.thanhtien) + '&nbsp;VNĐ');
                    $('#sum_price').html(addCommas(getData.tongtien) + '&nbsp;VNĐ');
                }
            });
        } else alert('Số lượng phải lớn hơn 0');
    }
}

function del(id) {
    if (id > 0) {
        jQuery.ajax({
            type: 'POST',
            url: "ajax.php?do=cart&act=delete",
            data: {
                'id': id
            },
            success: function(data) {
                var getData = $.parseJSON(data);
                $('#productct' + id).css('display', 'none');
                $('#sum_price').html(addCommas(getData.tongtien) + '&nbsp;VNĐ');
            }
        });
    }
}
</script>
<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a href="index.php?com=order&act=mam"><span><?=_donhang?></span></a></li>
            <li class="current"><a href="#" onclick="return false;"><?=_xemvasuadonhang?></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<form name="supplier" class="form"
    action="index.php?com=order&act=save<?php if($_REQUEST['id']!='') echo'&id='. $_REQUEST['id'];?>" method="post"
    enctype="multipart/form-data">
    <div class="oneOne">
        <div class="widget mtop0">

            <div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
                <h6><?=_thongtindonhang?> <?=@$item['code']?></h6>
            </div>
            <div class="oneOne mtop10">
                <div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
                    <h6><?=_thongtinnguoimua?></h6>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_hoten?>: <span
                            style="color: #999;"><?=@$item['fullname']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_dienthoai?>: <span
                            style="color: #999;"><?=@$item['phone']?></span></label>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label style="white-space: initial;"><?=_email?>: <span
                            style="color: #999;"><?=@$item['email']?></span></label>
                    <div class="clear"></div>
                </div>
               <?php
                    $city = $apiPlace->getPlaceId('id','place_citys',$item['id_city'],"id, name_$lang as name");
                            
                    $dist = $apiPlace->getPlaceId('id','place_dists',$item['id_dist'],"id, name_$lang as name");
                ?>
                <div class="formRow">
                    <label style="white-space: initial;"><?=_tinhthanh?>: <span
                            style="color: #999;"><?=$city['name']?></span></label>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label style="white-space: initial;"><?=_quanhuyen?>: <span
                            style="color: #999;"><?=$dist['name']?></span></label>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label style="white-space: initial;"><?=_diachi?>: <span
                            style="color: #999;"><?=@$item['address']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_yeucauthem?>: <span
                            style="color: #999;"><?=@$item['notes']?></span></label>
                    <div class="clear"></div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop0">
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                <thead>
                    <tr>
                        <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;"><?=_stt?></a></td>
                        <td class="sortCol">
                            <div><?=_tensanpham?><span></span></div>
                        </td>
                        <td width="150" align="center" style="text-align: center !important;"><?=_hinhanh?></td>
                        <td width="150" align="center" style="text-align: center !important;"><?=_tongdonhang?></td>
                        <td width="150" align="center" style="text-align: center !important;"><?=_soluong?></td>
                        <td width="150" align="center" style="text-align: center !important;"><?=_thanhtien?></td>
                        <td class="tb_data_small none"><?=_thaotac?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php      
    				$tongtien=0;

    				for($i=0,$count_donhang=count($cartOrder);$i<$count_donhang;$i++){	
    		          	$rowOrder=$func->getFieldId($cartOrder[$i]['id_product'],'baiviet');
                        $tongtien+=$cartOrder[$i]['price']*$cartOrder[$i]['qty'];
    				?>
                    <tr id="productct<?=$cartOrder[$i]['id']?>">
                        <td><?=$i+1?></td>
                        <td><?=$rowOrder['ten_'.$lang]?></td>
                        <td align="center"><img src="<?=_upload_baiviet.$rowOrder['photo']?>" height="100" /></td>
                        <td align="center"><?=$func->changeMoney($cartOrder[$i]['price'],$lang)?></td>
                        <td align="center">
                            <input type="text" class="tipS" style="width:50px; text-align:center"
                                original-title="Nhập số lượng sản phẩm" maxlength="3"
                                value="<?=$cartOrder[$i]['qty']?>" onchange="update(<?=$cartOrder[$i]['id']?>)"
                                id="product<?=$cartOrder[$i]['id']?>">
                            <div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$cartOrder[$i]['id']?>"
                                    src="images/loader.gif" alt="loader" /></div>
                            &nbsp;
                        </td>
                        <td align="center" id="id_price<?=$cartOrder[$i]['id']?>">
                            <?=$func->changeMoney($cartOrder[$i]['price']*$cartOrder[$i]['qty'],$lang)?></td>
                        <td class="actBtns none"><a class="smallButton tipS" original-title="Xóa sản phẩm"
                                href="javascript:del(<?=$cartOrder[$i]['id']?>)"><img
                                    src="./images/icons/dark/close.png" alt=""></a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5">
                            <div class="pagination">Tổng tiền</div>
                        </td>
                        <td>
                            <div class="pagination" style="color:#f00">
                                <b><?=$func->changeMoney($tongtien,$lang)?><b>
                            </div>
                        </td>

                    </tr>
                </tbody>
        </table>
    </div>
</div>
    <div class="oneOne">
        <div class="widget mtop0">
            <div class="formRow">
                <label><?=_tinhtrang?></label>
                <div class="formRight">
                    <div class="selector">
                        
                        <?php

                            $tinhtrang=$db->rawQuery("SELECT * from #_order_status");

                        ?>
                        <select name="data[order_status]" class="main-select" id="order_status">

                            <?php foreach($tinhtrang as $key => $value){?>
                                <option value="<?=$value['id']?>" <?php if($item['order_status']==$value['id']) echo 'selected';?>><?=$value['name_'.$lang]?></option>
                            <?php }?>

                        </select>


                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="formRow">
                <label>Thông tin thêm đơn hàng</label>
                <div class="formRight">
                    <textarea name="data[content]" rows="5"><?=$item['content']?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="formRow fixedBottom">
        <div class="formRight">
            <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">
                <div class="box-action">
                    <button type="submit" class="btn btn-sm bg-gradient-primary text-white submit-check">
                        <i class="far fa-save mr-2"></i>Lưu
                    </button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</form>