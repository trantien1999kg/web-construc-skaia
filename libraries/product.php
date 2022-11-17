<?php

    class product{



        private $_d;//kết nối database



        private $_func;//tất cả hàm được gọi để thực hiện chức năng cần thiết



        private $_com;//com của page



        private $_table;//bảng lưu dữ liệu



        private $_temp_table;//bang lưu hình kèm theo



        private $_allowed=array('loaithanhvien','member','booking','video','map','product','contact','newsletter');//chặn lại không cho hiển thị hình kèm theo



        public function __construct($db,$func,$com,$table,$temp_table){



            $this->_d=$db;



            $this->_func=$func;



            $this->_com=$com;



            $this->_table=$table;



            $this->_temp_table=$temp_table;



        }



        public function getMans(){



            global $type,$url_path, $items, $paging,$page,$item_list,$items_cat,$items_item;



            $perPage = 10;



            $startpoint = ($page * $perPage) - $perPage;

            

            $limit = ' limit '.$startpoint.','.$perPage;



            $where = '#_'.$this->_table;



            $where.=" where type='$type'";



            $items_list = $this->_d->rawQuery("SELECT * from #_baiviet_list where type=? order by stt asc, id desc",array($type));
            
            $items_cat =   $this->_d->rawQuery("SELECT * from #_baiviet_cat where type=? order by stt asc, id desc",array($type));
            
            $items_item = $this->_d->rawQuery("SELECT * from #_baiviet_item where type=? order by stt asc, id desc",array($type));



            if($_GET['id_thuonghieu']!='')

            {

                $where.=" and id_thuonghieu = {$_GET['id_thuonghieu']}";

            }



            if($_GET['id_list']!='')

            {



                $items_cat = $this->_d->rawQuery("SELECT * from #_baiviet_cat where type=? and id_list=? order by id desc",array($type,$_GET['id_list']));



                $where.=" and id_list = {$_GET['id_list']}";





            }

            if($_GET['id_cat']!='')

            {



                $items_item = $this->_d->rawQuery("SELECT * from #_baiviet_item where type=? and id_cat=? order by id desc",array($type,$_GET['id_cat']));



                $where.=" and id_cat = {$_GET['id_cat']}";

            }

            if($_GET['id_item']!='')

            {



                $items_sub = $this->_d->rawQuery("SELECT * from #_baiviet_sub where type=? and id_item=? order by id desc",array($type,$_GET['id_item']));



                $where.=" and id_item = {$_GET['id_item']}";



            }

            if($_GET['id_sub']!='')

            {

                $where.=" and id_sub = {$_GET['id_sub']}";

            }

            if($_GET['id_product']!='')

            {

                $where.=" and id_product = {$_GET['id_product']}";

            }

            if($_REQUEST['pid']!=''){



                $where.=" and pid = {$_GET['id_product']}";



            }



            if($_GET['keyword']!='')

            {

                $keyword=   ($_GET['keyword']);

                

                $where.=" and ten_vi LIKE '%{$keyword}%'";

            }



            $where .=" order by id desc";



            $sql = "select * from {$where} {$limit}";



            $items = $this->_d->rawQuery($sql);


            $url = $this->_func->getCurrentPageURLAdmin();



            $sql = "SELECT COUNT(*) as `num` FROM {$where}";

            

            $count = $this->_d->rawQueryOne($sql);



            $total=$count['num'];



            $paging = $this->_func->paginationAdmin($total,$perPage,$page,$url);



            // $_SESSION['adm_crp']=$this->_func->getCurrentPageURLAdmin();

        }

        public function getMan(){



            global $id,$type,$page,$url_path, $item,$ds_photo,$GLOBAL;



            if(isset($_GET['id'])) $id = (int)($_GET['id']);

            

            if(isset($_GET['id_copy'])) $id = (int)($_GET['id_copy']);



            $sql = "select * from #_{$this->_table} where id=?";



            $item = $this->_d->rawQueryOne($sql,array($id));

            

            if(empty($item)){

               

                $response['status']=201;

               

                $response['message']="Dữ liệu #id{$id} không có trong hệ thống ";

               

                $message=base64_encode(json_encode($response));

                

                $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

            

            }



            

            

            if(!in_array($this->_com,$this->_allowed)){

                

                $ds_photo = $this->_d->rawQuery("select * from #_{$this->_temp_table} where id_baiviet=? and type=? order by stt asc, id desc ",array($id,$type));



            }

        

        }



        public function getPageList(){



            global $item,$items_list,$items_cat,$items_item,$GLOBAL,$table;



            $com=isset($_GET["com"]) ? htmlspecialchars($_GET["com"]) : '';



            $act=isset($_GET["act"]) ? htmlspecialchars($_GET["act"]) : '';



            $tbl=isset($_GET["tbl"]) ? '_'.htmlspecialchars($_GET["tbl"]) : '';



            $type=htmlspecialchars($_GET["type"]);



            if(isset($_GET['id'])) $id = (int)($_GET['id']);

            

            if(isset($_GET['id_copy'])) $id = (int)($_GET['id_copy']);



            $table=$GLOBAL[$com][$type];



            $items_list = $this->_d->rawQuery("SELECT * from #_baiviet_list where type=? order by id desc",array($type));



            if($id){



                $items_cat = $this->_d->rawQuery("SELECT * from #_baiviet_cat where type=? and id_list=? order by id desc",array($type,$item['id_list']));



                $items_item = $this->_d->rawQuery("SELECT * from #_baiviet_item where type=? and id_cat=? order by id desc",array($type,$item['id_cat']));



            }



        }



        public function saveMan(){

           

            global $config,$url_path,$folder,$type,$GLOBAL,$table;



            $com=isset($_GET["com"]) ? $_GET["com"] : '';



            $act=isset($_GET["act"]) ? $_GET["act"] : '';



            $tbl=isset($_GET["tbl"]) ? '_'.$_GET["tbl"] : '';



            $file_name=$this->_func->imagesName($_FILES['file']['name']);



            $table=$GLOBAL[$com][$type];



            $id = (int)$_GET['id'];



            $data=$_POST['data'];



            if($_POST){



                foreach($data as $k=>$v){



                    if($k != 'tags'){



                        $send[$k]=htmlspecialchars($v);



                    }

                    

                }

                

            }

            if(isset($data["tags"])){

                $send["tags"] = json_encode($data['tags']);
           
            }


            $file=$_FILES['file'];

            $file1=$_FILES['icon'];

            $filebanner = $_FILES['banner'];

            $file2=$_FILES['video'];

            $file3=$_FILES['advance'];



            if(!empty($file)){



                if($id){



                    if($file['error']==0){
    

                        $photo = $this->_func->uploadImg($id,"photo","thumb",$file,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

  

                        $send['photo'] = $photo['photo'];

                        

                        $send['thumb'] = $photo['thumb'];

                    }



                }else{



                    if($file['error']==0){

                        

                        $photo = $this->_func->uploadImg(0,"photo","thumb",$file,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['photo'] = $photo['photo'];

                        

                        $send['thumb'] = $photo['thumb'];



                    }

                }

            }
            
            if($com == 'attribute'){
                $send['id_product'] = (int)$_GET['id_product'];
            }

            if(!empty($file1)){



                if($id){



                    if($file1['error']==0){

                        

                        $photo = $this->_func->uploadImg($id,"icon","",$file1,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['icon'] = $photo['icon'];

                        

                    }



                }else{



                    if($file1['error']==0){

                        

                        $photo = $this->_func->uploadImg(0,"icon","",$file1,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['icon'] = $photo['icon'];

                        

                    }
        
                }

            }

            if(!empty($file2)){



                if($id){



                    if($file2['error']==0){

                        

                        $photo = $this->_func->uploadImg($id,"video","",$file2,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['video'] = $photo['video'];

                        

                    }



                }else{



                    if($file2['error']==0){

                        

                        $photo = $this->_func->uploadImg(0,"video","",$file2,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['video'] = $photo['video'];

                        

                    }

                    

                }

            }

            if(!empty($file3)){



                if($id){



                    if($file3['error']==0){

                        

                        $photo = $this->_func->uploadImg($id,"advance","",$file3,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['advance'] = $photo['advance'];

                        

                    }



                }else{



                    if($file3['error']==0){

                        

                        $photo = $this->_func->uploadImg(0,"advance","",$file3,$folder,$this->_com,$table['img-width'],$table['img-height'],$table['img-ratio'],$table['img-b']);

                        

                        $send['advance'] = $photo['advance'];

                        

                    }

                    

                }

            }

            if(!empty($filebanner)){

                if($filebanner['error']==0){

                        

                    $photobanner = $this->_func->uploadImg($id,"banner","",$filebanner,$folder,$this->_com,$table['banner-width'],$table['banner-height'],$table['banner-ratio'],$table['banner-b']);

                    

                    $send['banner'] = $photobanner['banner'];

                    

                }else{

                    if($filebanner['error']==0){

                        
                        $photobanner = $this->_func->uploadImg(0,"banner","",$filebanner,$folder,$this->_com,$table['banner-width'],$table['banner-height'],$table['banner-ratio'],$table['banner-b']);

                        
                        $send['banner'] = $photobanner['banner'];
             

                    }
                    
                }

            }



            if($data['giaban']){

                $send['giaban']=str_replace(',','',$data['giaban']);

            }

            

            if($data['giacu']){

                $send['giacu']=str_replace(',','',$data['giacu']);

            }

            if($data['max']){

                $send['max']=str_replace(',','',$data['max']);

            }


            if($data['min']){

                $send['min']=str_replace(',','',$data['min']);

            }

            if($data['dien-tich']){

                $send['dien-tich']=str_replace(',','',$data['dien-tich']);

            }

            if($_POST['id_thuonghieu']){

                $send['id_thuonghieu']=implode(',',$_POST['id_thuonghieu']);

            }

            $send['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;



            if($data['password']!=''){

                $send['password']=md5(sha1($data['password']));

            }

            $savehere = (isset($_POST['save-here'])) ? true : false;

            if(isset($table['seo'])&&$table['seo']==true){



                $dataSeo = (isset($_POST['dataseo'])) ? $_POST['dataseo'] : null;

                if($dataSeo)

                {

                    foreach($dataSeo as $column => $value)

                    {

                        $dataSeo[$column] = htmlspecialchars($value);

                    }

                    if(isset($dataSeo["schema"])){

                        $dataSeo["schema"] = $dataSeo["schema"];

                    }

                }



            }

            if($id){

                $send['ngaysua']=time();

                $this->_d->where('id', $id);

                $updateData=$this->_d->update($this->_table,$send);

                if($updateData){



                    if(isset($table['seo'])&&$table['seo']==true){

                        $this->_d->rawQuery("delete from #_seo where idmuc = ? and com = ? and act = ? and type = ?",array($id,$com,'man'.$tbl,$type));

                        $dataSeo['idmuc'] = $id;

                        $dataSeo['com'] = $com;

                        $dataSeo['act'] = 'man'.$tbl;

                        $dataSeo['type'] = $type;

                        $this->_d->insert('seo',$dataSeo);

                    }

                    if (!empty($_FILES['files']) && count($_FILES['files'])>0) {

                        

                        if (isset($_FILES['files'])) {

                            for($i=0;$i<count($_FILES['files']['name']);$i++){

                                if($_FILES['files']['name'][$i]!=''){

                                    $file['name'] = $_FILES['files']['name'][$i];

                                    $file['type'] = $_FILES['files']['type'][$i];

                                    $file['tmp_name'] = $_FILES['files']['tmp_name'][$i];

                                    $file['error'] = $_FILES['files']['error'][$i];

                                    $file['size'] = $_FILES['files']['size'][$i];

                                    $file_name = $this->_func->imagesName($_FILES['files']['name'][$i]);

                                    $photo = $this->_func->uploadPhoto($file, $table['multi-gallery-arr'][$type]['img_type_photo'], $folder,$file_name);

                                    $sendx['photo'] = $photo;

                                    $sendx['stt'] = (int)$_POST['stthinh'][$i];

                                    $sendx['type'] = $type;

                                    $sendx['id_baiviet'] = $id;

                                    $sendx['hienthi'] = 1;

                                    $this->_d->insert($this->_temp_table,$sendx);

                                }

                            }

                        }

                    }

                    $response['status']=200;

                    $response['message']="Cập nhật thông tin #id{$id} thành công";

                    $message=base64_encode(json_encode($response));



                   if($savehere) $this->_func->redirect("index.html?com={$this->_com}&act=edit{$url_path}&message={$message}");

                    else $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }else{

                    $response['status']=201;

                    $response['message']="Cập nhật thông tin #id{$id} không thành công";

                    $message=base64_encode(json_encode($response));

                    $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }

            }else{

                $send['ngaytao']=time();

                $send['type']=$type;



                $insertID=$this->_d->insert($this->_table,$send);

                if($insertID){

                    if(isset($table['seo'])&&$table['seo']==true){

                        $dataSeo['idmuc'] = $insertID;

                        $dataSeo['com'] = $com;

                        $dataSeo['act'] = 'man'.$tbl;

                        $dataSeo['type'] = $type;

                        $this->_d->insert('seo',$dataSeo);

                    }

                    if (!empty($_FILES['files']) && count($_FILES['files'])>0) {

                        if (isset($_FILES['files'])) {

                            for($i=0;$i<count($_FILES['files']['name']);$i++){

                                if($_FILES['files']['name'][$i]!=''){

                                    $file['name'] = $_FILES['files']['name'][$i];

                                    $file['type'] = $_FILES['files']['type'][$i];

                                    $file['tmp_name'] = $_FILES['files']['tmp_name'][$i];

                                    $file['error'] = $_FILES['files']['error'][$i];

                                    $file['size'] = $_FILES['files']['size'][$i];

                                    $file_name = $this->_func->imagesName($_FILES['files']['name'][$i]);

                                    $photo = $this->_func->uploadPhoto($file, $table['multi-gallery-arr'][$type]['img_type_photo'], $folder,$file_name);

                                    $sendx['photo'] = $photo;

                                    $sendx['stt'] = (int)$_POST['stthinh'][$i];

                                    $sendx['type'] = $type;

                                    $sendx['id_baiviet'] = $insertID;

                                    $sendx['hienthi'] = 1;

                                    $this->_d->insert($this->_temp_table,$sendx);

                                }

                            }

                        }

                    }

                    $response['status']=200;

                    $response['message']="Thêm dữ liệu #id{$insertID} thành công";

                    $message=base64_encode(json_encode($response));

                    if($savehere) $this->_func->redirect("index.html?com={$this->_com}&act=edit&id={$insertID}{$url_path}&message={$message}");

                    else $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }else{

                    $response['status']=201;

                    $response['message']="Thêm dữ liệu #id{$insertID} không thành công";

                    $message=base64_encode(json_encode($response));

                    

                    $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }

            }

        }

        public function deleteMan(){

            global $type,$url_path,$folder;

            if(isset($_GET['id'])){

                $id =  (int)$_GET['id'];

                $item=$this->_d->rawQueryOne("select id,photo,thumb from #_{$this->_table} where id=?",array($id));
                if($item){

                    if(!in_array($this->_com,$this->_allowed)){

                        $photo_lq = $this->_d->rawQuery("select * from #_{$this->_temp_table} where id_baiviet=?",array($id));

                        if(count($photo_lq)>0){

                            foreach ($photo_lq as $k => $v) {

                                $this->_func->deleteLink($folder.$v['photo']);

                                $this->_func->deleteLink($folder.$v['thumb']);

                                $this->_d->where('id', $v['id']);

                                $this->_d->delete($this->_temp_table);

                            }

                        }

                    }



                    

                    $this->_func->deleteLink($folder.$item['photo']);

                    $this->_func->deleteLink($folder.$item['thumb']);

                    $this->_d->where('id', $item['id']);

                    $this->_d->delete($this->_table);

                    $response['status']=200;

                    $response['message']="Xóa thông tin #id{$id} thành công";

                    $message=base64_encode(json_encode($response));

                    $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }else{

                    $response['status']=201;

                    $response['message']='Hệ thống đang gặp vấn đề, không thể xóa dữ liệu!';

                    $message=base64_encode(json_encode($response));

                    $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }

            } elseif (isset($_GET['listid'])==true){

        

                $listid = explode(",",$_GET['listid']);

                if(count($listid)){

                    foreach ($listid as $k => $v) {

                        $id=(int)$v;

                        $item=$this->_d->rawQueryOne("select id,photo,thumb from #_{$this->_table} where id=?",array($id));

                        if($item){

                            if(!in_array($this->_com,$this->_allowed)){

                                $photo_lq = $this->_d->rawQuery("select id,photo,thumb from #_{$this->_temp_table} where id_baiviet=?",array($id));

                                if(count($photo_lq)>0){

                                   foreach ($photo_lq as $k1 => $v1) {

                                        $this->_func->deleteLink($folder.$v1['photo']);

                                        $this->_func->deleteLink($folder.$v1['thumb']);

                                        $this->_d->where('id', $v1['id']);

                                        $this->_d->delete($this->_temp_table);

                                    }

                                }

                            }

                            $this->_func->deleteLink($folder.$item['photo']);

                            $this->_func->deleteLink($folder.$item['thumb']);

                            $this->_d->where('id', $item['id']);

                            $this->_d->delete($this->_table);

                        }

                    }

                    $response['status']=200;

                    $response['message']="Xóa thông tin thành công";

                    $message=base64_encode(json_encode($response));

                    $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }else{

                    $response['status']=201;

                    $response['message']='Không nhận được dữ liệu';

                    $message=base64_encode(json_encode($response));

                    $this->_func->redirect("index.html?com={$this->_com}&act=man{$url_path}&message={$message}");

                }

            }

        }

    }

?>