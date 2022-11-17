<div class="box-modal-menu d-none d-block-m d-block-tablet" id="menuSide">

    <div class="p-relative">

        <ul class="list menu_list">

            <li>

                <a href="" title="<?= _home?>">

                    <span><?= _home?></span>

                </a>

            </li>

            <li>

                <div class="d-flex align-items-center">

                    <a href="gioi-thieu" title="Giới thiệu">

                        <span>Giới thiệu</span>

                    </a>
                    
                </div>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Dự án" href="du-an">Dự án</a>

                    <?php if(count($duan_c1)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

                <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($duan_c1 as $key => $value){

                        $c2= $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));?>
                    
                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>

                            <?php if($c2){?>
                            <a href="javascript:" class="toggle-btn ic-arrow">
                                <span></span>
                            </a>
                            <?php }?>

                        </div>
                        <ul class="inner ul-list-none" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){
                                $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_list=? and id_cat=? order by stt asc,id desc",array($value['id'],$vc2['id']));?>
                            <li>

                                <div class="d-flex p-relative">

                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $vc2['tenkhongdau']?>"
                                        title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                                    <?php if($c3){?>
                                    <a href="javascript:" class="toggle-btn ic-arrow">
                                        <span></span>
                                    </a>

                                    <?php }?>
                                </div>

                                <ul class="inner ul-list-none" style="display: none;">

                                    <?php foreach($c3 as $key => $vc3){ ?>

                                    <li>

                                        <div class="d-flex p-relative">

                                            <a href="<?= $value['type']?>/<?=$value['tenkhongdau']?>/<?= $vc3['tenkhongdau']?>"
                                                title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                        </div>
                                        
                                    </li>

                                    <?php }?>

                                </ul>
                                
                            </li>

                            <?php }?>

                        </ul>

                    </li>

                    <?php }?>

                </ul>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" href="dich-vu">Dịch vụ</a>

                    <?php if(count($dichvu_c1)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

               <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($dichvu_c1 as $key => $value){

                        $c2= $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));?>
                    
                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>

                            <?php if($c2){?>
                            <a href="javascript:" class="toggle-btn ic-arrow">
                                <span></span>
                            </a>
                            <?php }?>

                        </div>
                        <ul class="inner ul-list-none" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){
                                $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_list=? and id_cat=? order by stt asc,id desc",array($value['id'],$vc2['id']));?>
                            <li>

                                <div class="d-flex p-relative">

                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $vc2['tenkhongdau']?>"
                                        title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                                    <?php if($c3){?>
                                    <a href="javascript:" class="toggle-btn ic-arrow">
                                        <span></span>
                                    </a>

                                    <?php }?>
                                </div>

                                <ul class="inner ul-list-none" style="display: none;">

                                    <?php foreach($c3 as $key => $vc3){ ?>

                                    <li>

                                        <div class="d-flex p-relative">

                                            <a href="<?= $value['type']?>/<?=$value['tenkhongdau']?>/<?= $vc3['tenkhongdau']?>"
                                                title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                        </div>
                                        
                                    </li>

                                    <?php }?>

                                </ul>
                                
                            </li>

                            <?php }?>

                        </ul>

                    </li>

                    <?php }?>

                </ul> 

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Album" href="javascript:void(0)">Album</a>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                </div>

               <ul class="inner ul-list-none" style="display: none;"> 
                    
                    <li>

                        <div class="d-flex p-relative">

                            <a href="thu-vien-anh"
                                title="Thư viện ảnh">Thư viện ảnh</a>

                        </div>

                    </li>

                     <li>

                        <div class="d-flex p-relative">

                            <a href="video"
                                title="Video">Video</a>

                        </div>

                    </li>

                </ul> 

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Cẩm nang" href="cam-nang">Cẩm nang</a>

                    <?php if(count($camnang_c1)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

               <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($camnang_c1 as $key => $value){

                        $c2= $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc",array($value['id']));?>
                    
                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>

                            <?php if($c2){?>
                            <a href="javascript:" class="toggle-btn ic-arrow">
                                <span></span>
                            </a>
                            <?php }?>

                        </div>
                        
                        <ul class="inner ul-list-none" style="display: none;">

                            <?php foreach($c2 as $key => $vc2){
                                $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_list=? and id_cat=? order by stt asc,id desc",array($value['id'],$vc2['id']));?>
                            <li>

                                <div class="d-flex p-relative">

                                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $vc2['tenkhongdau']?>"
                                        title="<?= $vc2['ten']?>"><?= $vc2['ten']?></a>
                                    <?php if($c3){?>
                                    <a href="javascript:" class="toggle-btn ic-arrow">
                                        <span></span>
                                    </a>

                                    <?php }?>
                                </div>

                                <ul class="inner ul-list-none" style="display: none;">

                                    <?php foreach($c3 as $key => $vc3){ ?>

                                    <li>

                                        <div class="d-flex p-relative">

                                            <a href="<?= $value['type']?>/<?=$value['tenkhongdau']?>/<?= $vc3['tenkhongdau']?>"
                                                title="<?= $vc3['ten']?>"><?= $vc3['ten']?></a>

                                        </div>
                                        
                                    </li>

                                    <?php }?>

                                </ul>
                                
                            </li>

                            <?php }?>

                        </ul>

                    </li>

                    <?php }?>

                </ul> 

            </li>

              <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Cẩm nang" href="javascript:void(0)">Báo giá</a>

                    <?php if(count($baogiam_c1)>0){ ?>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                    <?php }?>

                </div>

               <ul class="inner ul-list-none" style="display: none;">

                    <?php foreach($baogiam_c1 as $key => $value){ ?>
                    
                    <li>

                        <div class="d-flex p-relative">

                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"
                                title="<?= $value['ten']?>"><?= $value['ten']?></a>

                        </div>

                    </li>

                    <?php }?>

                </ul> 

            </li>

            <li>

                <div class="d-flex align-items-center">

                    <a href="lien-he" title="Liên hệ">

                        <span>Liên hệ</span>

                    </a>

                </div>

            </li>

        </ul>

    </div>

</div>