<div class="sideBar-product d-none d-block-m d-block-tablet">

    <div class="sideBar-product--title mb20">

        <span><span class="d-block ratio-img" img-width="60" img-height="51"><img class="ratio-img__content img-scale" src="./assets/images/loading_image.svg" data-src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>" alt="Logo công ty"></span> CUCHILAND</span>

    </div>

    <div class="row">
        
        <div class="col l-12 m-12 c-12">

            <div class="realestate-sale__sidebar__top mb20 ">

                <div class="realestate-sale__sidebar__top-title">

                    <span>TÌM NHÀ ĐẤT CỦ CHI</span>

                </div>

                <div class="realestate-sale__sidebar__top-box realestate-sale__sidebar__top-box--searchs mt10">

                    <div class="realestate-sale__sidebar__top-box-form fake-arrow mb20">

                        <select name="" id="sidebar-loaidat">

                            <option value="0">Loại đất</option>

                            <?php foreach($loaidat_bl as $key=>$value){ ?>

                                <option <?php if(isset($_GET["soil-type"]) && $_GET["soil-type"]==$value["id"]){echo 'selected';} ?> value="<?=$value["id"]?>"><?=$value["ten"]?></option>

                            <?php }?>

                        </select>

                    </div>

                    <div class="realestate-sale__sidebar__top-box-form fake-arrow mb20">

                        <select name="" id="sidebar-dientich">

                            <option value="0">Diện tích</option>

                            <?php foreach($dientich_bl as $key => $value){ ?>

                            <option <?php if(isset($_GET["area"]) && $_GET["area"]==$value["id"]){echo 'selected';} ?> value="<?=$value["id"]?>"><?=$value["ten"]?></option>

                            <?php }?>

                        </select>

                    </div>

                    <div class="realestate-sale__sidebar__top-box-form fake-arrow mb20">

                        <select name="" id="sidebar-huong">

                            <option value="0">Hướng</option>

                            <?php foreach($huong_bl as $key => $value){ ?>

                            <option <?php if(isset($_GET["direction"]) && $_GET["direction"]==$value["id"]){echo 'selected';} ?> value="<?=$value["id"]?>"><?=$value["ten"]?></option>

                            <?php }?>

                        </select>

                    </div>

                    <div class="realestate-sale__sidebar__top-box-form fake-arrow mb20">

                        <select name="" id="sidebar-giaban">

                            <option value="0">Giá bán</option>

                            <?php foreach($giaban_bl as $key => $value){ ?>

                            <option <?php if(isset($_GET["price"]) && $_GET["price"]==$value["id"]){echo 'selected';} ?> value="<?=$value["id"]?>"><?=$value["ten"]?></option>

                            <?php }?>

                        </select>

                    </div>

                    <div class="realestate-sale__sidebar__top-box-form-btn t-center">

                        <button type="button" onclick="eventSearchSideBar()">TÌM KIẾM</button>

                    </div>

                </div>

            </div>

            <div class="realestate-sale__sidebar__top mb20 ">

                <div class="realestate-sale__sidebar__top-title">

                    <span>BÁN ĐẤT CỦ CHI</span>

                </div>

                <div class="realestate-sale__sidebar__top-box realestate-sale__sidebar__top-box--mobile">

                    <ul class="realestate-sale__sidebar__top-box-list">

                        <?php foreach($nhadatban_c1 as $key => $value){
                            
                            $numbHome = $db->rawQuery('select id from #_baiviet where hienthi=1 and type=? and id_list=?',array('nha-dat-ban',$value["id"]));
                            
                            ?>

                        <li class="realestate-sale__sidebar__top-box-items">

                            <h2 class="mg0 realestate-sale__sidebar__top-box-title line-2">

                                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" rel="dofollow" title="<?=$value["ten"]?>"><?=$value["ten"]?> <?=count($numbHome)!=0 ? '('.count($numbHome).')':''?></a>

                            </h2>

                        </li>

                        <?php }?>

                    </ul>

                </div>

            </div>


        </div>
        
    </div>
    
</div>

<div id="opensideBar-product" class="d-none d-block-m d-block-tablet">
    <i class="fa fa-filter openFilter"></i>
    <p class="mg0 opensideBar-product__text" style="font-size:1.2rem;">Bộ lọc</p>
</div>