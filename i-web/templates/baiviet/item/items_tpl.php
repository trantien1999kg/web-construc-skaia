<script type="text/javascript">
$(document).ready(function() {
    $('.update_stt').keyup(function(event) {
        var id = $(this).attr('rel');
        var table = 'baiviet_item';
        var value = $(this).val();
        $.ajax({
            type: "POST",
            url: "ajax/update_stt.php",
            data: {
                id: id,
                table: table,
                value: value
            },
            success: function(result) {}
        });
    });
    $('.timkiem button').click(function(event) {
        var keyword = $(this).parent().find('input').val();
        window.location.href =
            "index.html?com=baiviet&act=man_item&tbl=<?=$_GET['tbl']?>&type=<?=$_GET['type']?>&keyword=" +
            keyword;
    });
   $("#xoahet").click(function() {
        var listid=$("input[name='chon']:checked").map(function() {
            return this.value
        }).get().join(",");
        $.confirm({
            title: 'Xác nhận!',
            content: 'Bạn có chắc chắn muốn xóa mục này!',
            buttons: {
                success: {
                    text: 'Đồng ý!',
                    btnClass: 'btn-blue',
                    action: function(){
                       redirect("index.html?com=baiviet&act=delete_item&tbl=<?=$_GET['tbl']?>&type=<?=$_GET['type']?>&page=<?=$_GET['page']?>&listid=" + listid);
                    }
                },
                cancel: {   
                    text: 'Hủy ngay!',
                    btnClass: 'btn-red'
                }
            }
        });
    });
});
</script>

<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a
                    href="index.html?com=baiviet&act=man_item&tbl=<?=$_GET['tbl']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$GLOBAL_LEVEL3[$com][$type]['title']?></span></a>
            </li>
            <?php if($_GET['keyword']!=''){ ?>
            <li class="current"><a href="#" onclick="return false;"><?=_ketquatimkiem?> " <?=$_GET['keyword']?> " </a>
            </li>
            <?php }else{ ?>
            <li class="current"><a href="#" onclick="return false;"><?=_tatca?></a></li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>


<form name="f" id="f" method="post">
    <div class="oneOne">
        <div class="box-admin" style="display:flex; align-items:center;">
            <div class="box-action">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.html?com=baiviet&act=add_item&tbl=<?=$_GET['tbl']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>">
                    <i class="fas fa-plus mr-2"></i>Thêm mới
                </a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="xoahet">
                    <i class="far fa-trash-alt mr-2"></i>Xóa tất cả
                </a>
            </div>
            <div class="box-search">
                <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm ">
                <button type="button" class="btn btn-navbar text-white" value=""><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop0">
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                <thead>
                    <tr>
                        <td>

                            <label class="stardust-checkbox">
                                <input class="stardust-checkbox__input" id="checkAll" type="checkbox" value=""
                                    style="display:none">
                                <div class="stardust-checkbox__box"></div>
                            </label>
                        </td>
                        <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;"><?=_thutu?></a></td>
                        <td class="" style="width:100px;">
                             <select class="main_select" name="data[id_list]" id="id_list" onChange="window.location.href='index.html?com=<?=$_GET['com']?>&act=man_item&tbl=item&type=<?=$_GET['type']?>&id_list='+this.value">
                                <option value="0">Chọn danh mục cấp 1</option>
                                <?php for($i=0;$i<count($items_list);$i++){ ?>
                                <option value="<?=$items_list[$i]['id']?>" <?=($_GET['id_list']==$items_list[$i]['id']) ? 'selected':''?>><?=$items_list[$i]['ten_vi']?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td class="" style="width:100px;">
                             <select class="main_select" name="data[id_cat]" id="id_cat" onChange="window.location.href='index.html?com=<?=$_GET['com']?>&act=man_item&tbl=item&type=<?=$_GET['type']?>&id_list=<?=$_GET['id_list']?>&id_cat='+this.value">
                                <option value="0">Chọn danh mục cấp 2</option>
                                <?php for($i=0;$i<count($items_cat);$i++){ ?>
                                <option value="<?=$items_cat[$i]['id']?>" <?=($_GET['id_cat']==$items_cat[$i]['id']) ? 'selected':''?>><?=$items_cat[$i]['ten_vi']?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <?php if($type != 'bao-gia'){ ?>
                        <td>
                            Hình ảnh
                        </td>
                        <?php }?>
                        <td class="sortCol" style="width:300px;">
                            <div><?=_tendanhmuc?><span></span></div>
                        </td>
                        
                        <?php foreach($GLOBAL_LEVEL3[$com][$type]['check_item'] as $key =>$value){ ?>
                            <td class="tb_data_small"><?=$value?></td>
                        <?php } ?>
                        <td class="tb_data_small"><?=_thaotac?></td>
                    </tr>
                </thead>

                <tbody>
                    <?php for($i=0, $count=count($items); $i<$count; $i++){?>
                    <tr>
                        <td>
                            <label class="stardust-checkbox checker">
                                <input class="stardust-checkbox__input" name="chon" id="check<?=$i?>" type="checkbox"
                                    value="<?=$items[$i]['id']?>" style="display:none">
                                <div class="stardust-checkbox__box"></div>
                            </label>
                        </td>

                        <td align="center">
                            <input type="text" value="<?=$items[$i]['stt']?>" name="ordering[]"
                                onkeypress="return OnlyNumber(event)" class="tipS smallText update_stt"
                                original-title="Nhập số thứ tự sản phẩm" rel="<?=$items[$i]['id']?>" />

                            <div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$items[$i]['id']?>"
                                    src="images/loader.gif" alt="loader" /></div>
                        </td>

                        <td align="center">
                            <?php
                            $sql = "select ten_vi from table_baiviet_list where id='".$items[$i]['id_list']."'";
                            $result=$db->rawQueryOne($sql);
                            echo @$result['ten_vi'];
                          ?>
                        </td>
                        <td align="center">
                            <?php
                            $sql = "select ten_vi from table_baiviet_cat where id='".$items[$i]['id_cat']."'";
                            $result=$db->rawQueryOne($sql);
                            echo @$result['ten_vi'];
                          ?>
                        </td>

                        <?php if($type != 'bao-gia'){ ?>

                        <?php if($GLOBAL_LEVEL1[$com][$type]['img']==true){ ?>
                        <td align="center">
                            <a href="index.html?com=baiviet&act=edit_item&tbl=<?=$_GET['tbl']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?><?php if($_REQUEST['page']!='') echo'&page='. $_REQUEST['page'];?>"
                                class="tipS SC_bold">
                                <img src="<?=_upload_baiviet.$items[$i]['photo']?>" alt="" width="100">
                            </a>
                        </td>
                        <?php } ?>

                        <?php }?>


                        <td class="title_name_data">
                            <a href="index.html?com=baiviet&act=edit_item&tbl=<?=$_GET['tbl']?>&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"
                                class="tipS SC_bold"><?=$items[$i]['ten_vi']?></a>
                        </td>

                        <?php foreach($GLOBAL_LEVEL3[$com][$type]['check_item'] as $key =>$value){ ?>
                        <td align="center">
                            <label class="stardust-checkbox checkOnOff">
                                <input class="stardust-checkbox__input" 
                                    data-id="<?=$items[$i]['id']?>"
                                    data-table="table_baiviet_item" 
                                    data-type="<?=$key?>" 
                                    rel="<?=$items[$i][$key]?>"
                                    <?php if($items[$i][$key]==1) echo 'checked'; ?> 
                                    name="onOff" 
                                    type="checkbox"
                                    style="display:none">
                                <div class="stardust-checkbox__box"></div>
                            </label>
                        </td>
                        <?php } ?>

                        <td class="actBtns">
                            <a class="text-primary" href="index.html?com=baiviet&act=edit_item&tbl=<?=$_GET['tbl']?>&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"
                                title="" class="smallButton tipS" original-title="Sửa sản phẩm"><i class="fas fa-edit"></i></a>

                            <a class="text-danger" data-product="<?=$items[$i]['id']?>" data-com="<?=$_GET['com']?>" data-act="delete_<?=$_GET['tbl']?>" data-tbl="<?=$_GET['tbl']?>" data-type="<?=$_GET['type']?>" data-page="<?=$_GET['page']?>" href="javascript:" data-js-delete title=""
                                    class="smallButton tipS" original-title="Xóa "><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<div class="paging"><?=$paging?></div>