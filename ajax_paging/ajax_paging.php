<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["page"]))

    {
      $idcat = "";
      
      $cond = [];

      $idlist = "";
      if($_REQUEST["id_list"]>0){
        $idlist = " and id_list= ?";
        array_push($cond,$_REQUEST["id_list"]);
      }
      if($_REQUEST["id_cat"]>0){
        $idcat = " and id_cat = ? ";
        array_push($cond,$_REQUEST["id_cat"]);
      }

      $type = $_REQUEST['type'];

      array_push($cond,$type);

      $str_van = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 ".$idlist." ".$idcat." and noibat=1 and type= ? order by stt asc,id desc";
  
      $paging = new paging_ajax();

      $paging->class_pagination = "pagination";

      $paging->class_active = "active";

      $paging->class_inactive = "inactive";

      $paging->class_go_button = "go_button";

      $paging->class_text_total = "total";

      $paging->class_txt_goto = "txt_go_button";

      $paging->cond = $cond;

        $paging->per_page = $_REQUEST['per_page'];   

        $sotrang=$_REQUEST['per_page'];

        $paging->page = $_REQUEST["page"];

      $paging->text_sql = $str_van;

        $result_pag_data = $paging->GetResult();

    }

?>

<?php

    if(count($result_pag_data)>0){

      foreach ($result_pag_data as $key => $value){

        $alias_call = $func->getAlias($value['id_list'],'baiviet_list',$value['type']);

        $alias_l = $func->checkListAlias($alias_call);

        $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($value["type"],$value["id"]));

      ?>
  
    <div class="realestate-sale__box-body-detail">

      <?php if($deviceType!='computer'){ ?>

      <div class="realestate-sale__box-body-detail-content-aside-title d-none d-block-m">

          <h4 class="realestate-sale__box-body-detail-content-title mg0">

              <a href="<?=$value["type"]?>/<?=$alias_l.$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" rel="dofollow"><?=$value["ten_$lang"]?></a>

          </h4>

      </div>

      <?php }?>

      <div class="row">

          <div class="col l-4 m-4 c-5">

              <div class="realestate-sale__box-body-detail-img hover-line__boder">

                <div class="hover-line__boder-outline"></div>

                  <a href="<?=$value["type"]?>/<?=$alias_l.$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" rel="dofollow" class="d-block hover-left ratio-img" img-width="304" img-height="177">

                      <img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>

                      <?php if($value['id_loai']!=0){ ?>

                      <span class="realestate-sale__box-body-detail-img-overplay"><span><?php if($value['id_loai']==2){echo 'Đã bán';}else{echo 'Đang mở bán';}  ?></span></span>

                      <?php }?>

                      <?php if(count($photos)>0){ ?>

                      <div class="realestate-sale__box-body-detail-img-overplay-count">

                        <span><i class="fa-thin fa-image"></i> <?=count($photos)+1?></span>

                      </div>

                      <?php }?>

                  </a>

              </div>

          </div>

          <div class="col l-8 m-8 c-7">

              <div class="realestate-sale__box-body-detail-content">

                  <?php if($deviceType=='computer'){ ?>

                  <div class="realestate-sale__box-body-detail-content-aside-title d-none-m">

                      <h4 class="realestate-sale__box-body-detail-content-title line-2 mg0">

                          <a href="<?=$value["type"]?>/<?=$alias_l.$value["tenkhongdau"]?>" title="<?=$value["ten_$lang"]?>" rel="dofollow"><?=$value["ten_$lang"]?></a>

                      </h4>

                  </div>

                  <?php }?>

                  <div class="realestate-sale__box-body-detail-content-view d-none-m">

                      <span><i class="fa-sharp fa-solid fa-location-dot mr20"></i> <strong class="view-change__color">Vị trí:</strong> <?=($value["xuatxu"]!='') ? $value["xuatxu"]:'Đang cập nhật...';?></span>

                      <span><i class="fa-sharp fa-solid fa-chart-area mr20"></i> <strong class="view-change__color">Diện tích:</strong> <?= ($value["dientich"]!=0) ? $value["dientich"].' m'.'<sup>2</sup>':'Đang cập nhật...'?></span>

                      <span class="realestate-sale__box-body-detail-content-view-price"><i class="fa-regular fa-money-bill-1-wave mr20"></i> <strong>Giá:</strong> <?=($value["giaban"]!=0)? $func->FormatBDSMoney($value["giaban"]):'Liên hệ';?></span>

                  </div>

                  <div class="realestate-sale__box-body-detail-content-view d-none d-block-m">

                      <span><i class="fa-sharp fa-solid fa-location-dot"></i> <?=($value["xuatxu"]!='') ? $value["xuatxu"]:'Đang cập nhật...';?></span>

                      <span><i class="fa-sharp fa-solid fa-chart-area"></i> <?= ($value["dientich"]!=0) ? $value["dientich"].' m'.'<sup>2</sup>':'Đang cập nhật...'?></span>

                      <span class="realestate-sale__box-body-detail-content-view-price"><i class="fa-regular fa-money-bill-1-wave"></i> <?=($value["giaban"]!=0)? $func->FormatBDSMoney($value["giaban"]):'Liên hệ';?></span>    

                  </div>

              </div>

          </div>

      </div>

    </div>

  <?php } ?>

  <?php if($paging->getRow()>$_REQUEST['per_page']){?>

  <div class="row">
    <div class="col l-12 c-12 m-12">
        <?= $paging->Load()?>
    </div>
  </div>
  <?php }}else{?>
    <div class="row">
      <div class="col l-12 c-12 m-12 t-center">
          <p style="Arial, Helvetica, sans-serif;">Nội dung đang được cập nhật...</p>
      </div>
    </div>
  <?php }?>
</div>