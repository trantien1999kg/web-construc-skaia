<?php  if(!defined('_source')) die("Error");
	$row_detail = $db->rawQueryOne("select ten_$lang,mota_$lang ,noidung_$lang,photo,type from #_info where type=? limit 0,1",array($type));
	/* SEO */
    $seoDB = $seo->getSeoDB(0,'info','capnhat',$type);
    if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('h1',$seoDB['title_'.$seolang]);
    if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);
    if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);
    if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);

   
    $seo->setSeo('url',$func->getCurrentPageURL());
    $img_json_bar = (isset($row_detail['options']) && $row_detail['options'] != '') ? json_decode($row_detail['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $row_detail['photo']))
    {
        $img_json_bar = $func->getImgSize($row_detail['photo'],_upload_hinhanh_l.$row_detail['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$row_detail['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_hinhanh_l.$row_detail['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }

    $str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',array(array('alias'=>$row_detail['type'],'name'=>$row_detail['ten_'.$lang])));
	
	if($row_detail["noidung_$lang"]=="") $title="Nội Dung Đang Cập Nhật...";

?>

