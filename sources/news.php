<?php  if(!defined('_source')) die("Error");



    @$id =  htmlspecialchars($_GET['id']);

    

    @$idl =  htmlspecialchars($_GET['idl']);



    @$idc =  htmlspecialchars($_GET['idc']);

    

    @$idi =  htmlspecialchars($_GET['idi']);

    

    @$ids =  htmlspecialchars($_GET['ids']);



    $sortby = (isset($_GET['sortby'])) ? addslashes($_GET['sortby']) : "";



    $show = (isset($_GET['show'])) ? addslashes($_GET['show']) : "";



    if($sortby){



        $ex_sort_by = str_replace('-', ' ', $sortby);



        $order_by = ' order by '.$ex_sort_by;



    }else{



        $order_by = ' order by stt asc, id desc';



    }



    if(!empty($show)){



        $per_page=$show;



    }else{



        if($com=='nha-dat-ban'){ 



            $per_page=$row_setting['page_sp'];



        }else{



             $per_page=$row_setting['page_ne'];



        }





    }



    $subWhere="";



    if(!empty($idl)){

        

        $row_list=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,noidung_$lang,options,mucluc,photo,type,cano_$lang,banner from #_baiviet_list where hienthi=1 and type=? and id=? order by stt asc, id desc",array($type,$idl));



        if($row_list){

            

            $subWhere.=" and id_list={$row_list['id']}";


            if($com=='bao-gia'){

                $row_cat = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,photo,id_list,type from #_baiviet_cat where hienthi=1 and type=? and id_list=? order by stt asc",array($type,$row_list["id"]));

            }



            $startpoint = ($page * $per_page) - $per_page;



            $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id_list=? and type=? $order_by limit $startpoint,$per_page",array($row_list['id'],$type));



            $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and id_list=? and type=?", array($row_list['id'],$type));

            

            $total=$count['numb'];


            $row_cano = $row_list["cano_$lang"];

        

            $url = $func->getCurrentPageURL();



            $row_toc=$row_list['mucluc'];

            

            $paging = $func->pagination($total,$per_page,$page,$url);



            $data['breadcrumbs'][0] = array('alias'=>$type,'name'=>$title_seo);



            $data['breadcrumbs'][1] = $func->getArray($row_list);



            $str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);



            $json_code .= $json_schema->ItemList($tintuc);

            

            $seoDB = $seo->getSeoDB($row_list['id'],'baiviet','man_list',$row_list['type']);



            $seo->setSeo('h1',$row_list['ten_'.$lang]);



            $seo->setSeo('subject',$row_list['mota_'.$lang]);



            $seo->setSeo('content',$row_list['noidung_'.$lang]);



            if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



            else $seo->setSeo('title',$row_list['ten_'.$lang]);



            if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



            if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);

            if(!empty($seoDB['schema'])) $seo->setSeo('schema',$seoDB['schema']);

            $seo->setSeo('url',$url);

            $img_json_bar = (isset($row_list['options']) && $row_list['options'] != '') ? json_decode($row_list['options'],true) : null;



            if($img_json_bar == null || ($img_json_bar['p'] != $row_list['photo']))



            {

                $img_json_bar = $func->getImgSize($row_list['photo'],_upload_baiviet_l.$row_list['photo']);



                $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_list['id']);



            }

            if(count($img_json_bar) > 0)

            {

                $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_list['photo']);



                $seo->setSeo('photo:width',$img_json_bar['w']);



                $seo->setSeo('photo:height',$img_json_bar['h']);



                $seo->setSeo('photo:type',$img_json_bar['m']);



            }



            $countList=$db->rawQuery("select id from #_baiviet_cat where hienthi=1 and id_list=? and type=? order by stt asc, id desc",array($row_list['id'],$type));



            $hiddenMore=(count($countList)>$per_page) ? '' : 'd-none';



            $row_catalogy=$db->rawQuery("select id,id_list,ten_$lang, tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_cat where hienthi=1 and id_list=? and type=?  order by stt asc,id desc limit 0,$itemPage",array($row_list['id'],$type));

            if($type=='san-pham'){



                $template='products/product_list';



                $seo->setSeo('pid',$idl);



                $seo->setSeo('temp','list');

            }



        }



    }

    

    if(!empty($idc)){



        $row_cat=$db->rawQueryOne("select id,id_list,ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,noidung_$lang,options,photo,mucluc,type,cano_$lang from #_baiviet_cat where hienthi=1 and type=? and id=? order by stt asc, id desc",array($type,$idc));

        if($row_cat){

            

            $subWhere.=" and id_cat={$row_cat['id']}";



            $startpoint = ($page * $per_page) - $per_page;



            $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id_cat=? and type=? $order_by limit $startpoint,$per_page",array($row_cat['id'],$type));



            $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and id_cat=? and type=?", array($row_cat['id'],$type));



            $total=$count['numb'];

           

            $url = $func->getCurrentPageURL();



            $row_toc=$row_cat['mucluc'];

            $row_cano = $row_cat["cano_$lang"];

            

            $paging = $func->pagination($total,$per_page,$page,$url);



            $data['breadcrumbs'][0] = array('alias'=>$type,'name'=>$title_seo);



            $row_list=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and id=? and type=? order by stt asc, id desc",array($row_cat['id_list'],$type));

            

            $data['breadcrumbs'][1] = $func->getArray($row_list);



            $data['breadcrumbs'][2] = $func->getArray($row_cat);



            $str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);



            $json_code .= $json_schema->ItemList($tintuc);

            

            $seoDB = $seo->getSeoDB($row_cat['id'],'baiviet','man_cat',$row_cat['type']);



            $seo->setSeo('h1',$row_cat['ten_'.$lang]);



            $seo->setSeo('subject',$row_cat['mota_'.$lang]);



            $seo->setSeo('content',$row_cat['noidung_'.$lang]);



            if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



            else $seo->setSeo('title',$row_cat['ten_'.$lang]);



            if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



            if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);

            if(!empty($seoDB['schema'])) $seo->setSeo('schema',$seoDB['schema']);


            $seo->setSeo('url',$url);



            $img_json_bar = (isset($row_cat['options']) && $row_cat['options'] != '') ? json_decode($row_cat['options'],true) : null;



            if($img_json_bar == null || ($img_json_bar['p'] != $row_cat['photo']))



            {

                $img_json_bar = $func->getImgSize($row_cat['photo'],_upload_baiviet_l.$row_cat['photo']);



                $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_cat['id']);



            }

            if(count($img_json_bar) > 0)

            {

                $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_cat['photo']);



                $seo->setSeo('photo:width',$img_json_bar['w']);



                $seo->setSeo('photo:height',$img_json_bar['h']);



                $seo->setSeo('photo:type',$img_json_bar['m']);



            }



            $countList=$db->rawQuery("select id from #_baiviet_item where hienthi=1 and id_cat=? and type=? order by stt asc, id desc",array($row_cat['id'],$type));



            $hiddenMore=(count($countList)>$per_page) ? '' : 'd-none';



            $row_catalogy=$db->rawQuery("select id,id_list,ten_$lang, tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_item where hienthi=1 and id_cat=? and type=? order by stt asc,id desc limit 0,$itemPage",array($row_cat['id'],$type));



            if($type=='san-pham'){



                $template='products/product_cat';



                $seo->setSeo('pid',$idc);



                $seo->setSeo('temp','cat');

            }



        }

    }

    if(!empty($idi)){



        $row_item=$db->rawQueryOne("select id,id_list,id_cat,ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,noidung_$lang,options,photo,mucluc,type,cano_$lang from #_baiviet_item where hienthi=1 and type=? and id=? order by stt asc, id desc",array($type,$idi));

        if($row_item){



            $subWhere.=" and id_item={$row_item['id']}";



            $startpoint = ($page * $per_page) - $per_page;



            $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id_item=? and type=? $order_by limit $startpoint,$per_page",array($row_item['id'],$type));



            $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and id_item=? and type=?", array($row_item['id'],$type));



            $total=$count['numb'];

            

            $url = $func->getCurrentPageURL();



            $row_toc=$row_item['mucluc'];

            $row_cano = $row_item["cano_$lang"];

            $paging = $func->pagination($total,$per_page,$page,$url);



            $data['breadcrumbs'][0] = array('alias'=>$type,'name'=>$title_seo);



            $row_list=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and id=? and type=? order by stt asc, id desc",array($row_item['id_list'],$type));



            $data['breadcrumbs'][1] = $func->getArray($row_list);



            $row_cat=$db->rawQueryOne("select id,id_list,ten_$lang,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id=? and type=? order by stt asc, id desc",array($row_item['id_cat'],$type));



            $data['breadcrumbs'][2] = $func->getArray($row_cat);



            $data['breadcrumbs'][3] = $func->getArray($row_item);



            $str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);



            $json_code .= $json_schema->ItemList($tintuc);

            

            $seoDB = $seo->getSeoDB($row_item['id'],'baiviet','man_item',$row_item['type']);



            $seo->setSeo('h1',$row_item['ten_'.$lang]);



            $seo->setSeo('subject',$row_item['mota_'.$lang]);



            $seo->setSeo('content',$row_item['noidung_'.$lang]);



            if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



            else $seo->setSeo('title',$row_item['ten_'.$lang]);



            if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



            if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);


            if(!empty($seoDB['schema'])) $seo->setSeo('schema',$seoDB['schema']);


            $seo->setSeo('url',$url);



            $img_json_bar = (isset($row_item['options']) && $row_item['options'] != '') ? json_decode($row_item['options'],true) : null;



            if($img_json_bar == null || ($img_json_bar['p'] != $row_item['photo']))



            {

                $img_json_bar = $func->getImgSize($row_item['photo'],_upload_baiviet_l.$row_item['photo']);



                $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_item['id']);



            }

            if(count($img_json_bar) > 0)

            {

                $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_item['photo']);



                $seo->setSeo('photo:width',$img_json_bar['w']);



                $seo->setSeo('photo:height',$img_json_bar['h']);



                $seo->setSeo('photo:type',$img_json_bar['m']);



            }



            $countList=$db->rawQuery("select id from #_baiviet_sub where hienthi=1 and id_item=? and type=? order by stt asc, id desc",array($row_item['id'],$type));



            $hiddenMore=(count($countList)>$per_page) ? '' : 'd-none';



            $row_catalogy=$db->rawQuery("select id,ten_$lang, tenkhongdau_$lang as tenkhongdau,photo,type from #_baiviet_sub where hienthi=1 and id_item=? and type=? order by stt asc,id desc limit 0,$itemPage",array($row_item['id'],$type));



            if($type=='san-pham'){



                $template='products/product_item';



                $seo->setSeo('pid',$idi);



                $seo->setSeo('temp','item');

            }



        }

    }

    if(!empty($ids)){



        $row_sub=$db->rawQueryOne("select id,id_list,id_cat,id_item,ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,noidung_$lang,options,mucluc,photo,type from #_baiviet_sub where hienthi=1 and id=? and type=? order by stt asc, id desc",array($ids,$type));



        if($row_sub){

            

            $subWhere.=" and id_sub={$row_sub['id']}";



            $startpoint = ($page * $per_page) - $per_page;

            

            $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id_sub=? and type=? $order_by limit $startpoint,$per_page",array($row_sub['id'],$type));



            $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and id_sub=? and type=?", array($row_sub['id'],$type));

            

            $total=$count['numb'];

            

            $url = $func->getCurrentPageURL();



            $row_toc=$row_sub['mucluc'];

            

            $paging = $func->pagination($total,$per_page,$page,$url);



            $data['breadcrumbs'][0] = array('alias'=>$type,'name'=>$title_seo);



            $row_list=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and id=? and type=? order by stt asc, id desc",array($row_sub['id_list'],$type));



            $data['breadcrumbs'][1] = $func->getArray($row_list);



            $row_cat=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and id=? and type=? order by stt asc, id desc",array($row_sub['id_cat'],$type));



            $data['breadcrumbs'][2] = $func->getArray($row_cat);



            $row_item=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_item where hienthi=1 and id=? and type=? order by stt asc, id desc",array($row_sub['id_item'],$type));



            $data['breadcrumbs'][3] = $func->getArray($row_item);



            $data['breadcrumbs'][4] = $func->getArray($row_sub);



            $str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);



            $json_code .= $json_schema->ItemList($tintuc);

            

            $seoDB = $seo->getSeoDB($row_sub['id'],'baiviet','man_cat',$row_sub['type']);



            $seo->setSeo('h1',$row_sub['ten_'.$lang]);



            $seo->setSeo('subject',$row_sub['mota_'.$lang]);



            $seo->setSeo('content',$row_sub['noidung_'.$lang]);



            if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



            else $seo->setSeo('title',$row_sub['ten_'.$lang]);



            if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



            if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);



            $seo->setSeo('url',$url);



            $img_json_bar = (isset($row_sub['options']) && $row_sub['options'] != '') ? json_decode($row_sub['options'],true) : null;



            if($img_json_bar == null || ($img_json_bar['p'] != $row_sub['photo']))



            {

                $img_json_bar = $func->getImgSize($row_sub['photo'],_upload_baiviet_l.$row_sub['photo']);



                $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_sub['id']);



            }

            if(count($img_json_bar) > 0)

            {

                $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_sub['photo']);



                $seo->setSeo('photo:width',$img_json_bar['w']);



                $seo->setSeo('photo:height',$img_json_bar['h']);



                $seo->setSeo('photo:type',$img_json_bar['m']);



            }



        }



    }

    if(empty($id) && empty($idl) && empty($idc) && empty($idi) && empty($ids)){


        $startpoint = ($page * $per_page) - $per_page;

        $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and type=? $order_by limit $startpoint,$per_page",array($type));

        $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and type=?", array($type));

        $total=$count['numb'];
   
        $url = $func->getCurrentPageURL();

        $paging = $func->pagination($total,$per_page,$page,$url);


        $row_list = $db->rawQuery("select id,ten_$lang, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array($type));
        

        $json_code .= $json_schema->ItemList($tintuc);

        

        $str_breadcrumbs = $breadcrumbs->getUrl('trang chủ',array(array('alias'=>$com,'name'=>$title_seo)));

    

        /* SEO */

        $seopage = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array($type));

        $seo->setSeo('h1',$seopage['title_'.$seolang]);

        $seo->setSeo('mucluc',$seopage['mota_'.$lang]);

        $seo->setSeo('subject',$seopage['mota_'.$lang]);

        $seo->setSeo('content',$seopage['noidung_'.$lang]);

        $row_toc=$seopage['mucluc'];

       

        if(!empty($seopage['title_'.$seolang])) $seo->setSeo('title',$seopage['title_'.$seolang]);

        else $seo->setSeo('title',$title_seo);

        if(!empty($seopage['keywords_'.$seolang])) $seo->setSeo('keywords',$seopage['keywords_'.$seolang]);

        if(!empty($seopage['description_'.$seolang])) $seo->setSeo('description',$seopage['description_'.$seolang]);

        $seo->setSeo('url',$func->getCurrentPageURL());

        $img_json_bar = (isset($seopage['options']) && $seopage['options'] != '') ? json_decode($seopage['options'],true) : null;

        if(!empty($seopage['photo']))

        {

            if($img_json_bar == null || ($img_json_bar['p'] != $seopage['photo']))

            {

                $img_json_bar = $func->getImgSize($seopage['photo'],_upload_seopage_l.$seopage['photo']);

                $seo->updateSeoDB(json_encode($img_json_bar),'seopage',$seopage['id']);

            }

            if(count($img_json_bar) > 0)

            {

                $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_seopage_l.$seopage['photo']);

                $seo->setSeo('photo:width',$img_json_bar['w']);

                $seo->setSeo('photo:height',$img_json_bar['h']);

                $seo->setSeo('photo:type',$img_json_bar['m']);

            }

        }

        // if(count($row_list) > 0 && $com=='san-pham'){

        //     $template='products/product_list';  



        //     $seo->setSeo('pid',$idl);



        //     $seo->setSeo('temp','list');

        // }



    }elseif(!empty($id)){

        $row_detail = $db->rawQueryOne("SELECT * ,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id=? and type=?",array($id,$type));

        $tags_product = json_decode($row_detail['tags'],true);

        $im_tag = implode(',',$tags_product);

        $post_tags = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau,type from #_tags where hienthi=1 and id in ($im_tag) and type=? order by stt asc",array('tags-san-pham'));

        $func->updateTable('baiviet',$row_detail['id']);

        $func->viewAdd($row_detail['id']);

        $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($type,$id));

        $list_detail=$db->rawQueryOne("select * ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where id=? and type=? limit 1", array($row_detail['id_list'],$type));



        $cat_detail=$db->rawQueryOne("select * ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id=? and type=? limit 1", array($row_detail['id_cat'],$type));



        $item_detail=$db->rawQueryOne("select * ,tenkhongdau_$lang as tenkhongdau,type from #_baiviet_item where id=? and type=? limit 1", array($row_detail['id_item'],$type));

        

        $data['breadcrumbs'][0] = array('alias'=>$type,'name'=>$title_seo);



        if(!empty($list_detail)){



            $data['breadcrumbs'][1] = $func->getArray($list_detail);



            $subWhere .= ' and id_list='.$list_detail['id'];



            if(!empty($cat_detail)){



                $data['breadcrumbs'][2] = $func->getArray($cat_detail);



                $subWhere .= ' and id_cat='.$cat_detail['id'];



                if(!empty($item_detail)){



                    $data['breadcrumbs'][3] = $func->getArray($item_detail);



                    $subWhere .= ' and id_item='.$item_detail['id'];



                    if(!empty($sub_detail)){



                        $data['breadcrumbs'][4] = $func->getArray($sub_detail);



                        $data['breadcrumbs'][5] = $func->getArray($row_detail);



                        $subWhere .= ' and id_subs='.$subs_detail['id'];



                    }else{



                        $data['breadcrumbs'][4] = $func->getArray($row_detail);



                    }



                }else{



                    $data['breadcrumbs'][3] = $func->getArray($row_detail);



                }



            }else{



                $data['breadcrumbs'][2] = $func->getArray($row_detail);



            }



        }else{



            $data['breadcrumbs'][1] = $func->getArray($row_detail);



        }



        $subWhere .= ' and id<>'.$row_detail['id'];



        $seoDB = $seo->getSeoDB($row_detail['id'],'baiviet','man',$row_detail['type']);



        $seo->setSeo('h1',$row_detail['ten_'.$lang]);



        $seo->setSeo('content',$row_detail['mota_'.$lang]);



        if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



        else $seo->setSeo('title',$row_detail['ten_'.$lang]);



        if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



        if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);

        if(!empty($seoDB['schema'])) $seo->setSeo('schema',$seoDB['schema']);



        $url=$func->getCurrentPageURL();



        $seo->setSeo('url',$url);



        $img_json_bar = (isset($row_detail['options']) && $row_detail['options'] != '') ? json_decode($row_detail['options'],true) : null;



        if($img_json_bar == null || ($img_json_bar['p'] != $row_detail['photo']))



        {

            $img_json_bar = $func->getImgSize($row_detail['photo'],_upload_baiviet_l.$row_detail['photo']);



            $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_detail['id']);



        }

        if(count($img_json_bar) > 0)

        {

            $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_detail['photo']);



            $seo->setSeo('photo:width',$img_json_bar['w']);



            $seo->setSeo('photo:height',$img_json_bar['h']);



            $seo->setSeo('photo:type',$img_json_bar['m']);



        }

        $row_cano=$row_detail["cano_$lang"];

        $str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);


        $breadcrumbs_detail = $breadcrumbs->getUrlDetail($data['breadcrumbs']);


        $json_code .= $json_schema->BreadcrumbList('Trang chủ',$data['breadcrumbs']);


        $json_code .=$json_schema->NewsArticle($row_detail,$seoDB);


        $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from table_baiviet where hienthi=1 and type=?{$subWhere} order by stt asc, id desc limit 0,10",array($type));

        

    }

  

?>

