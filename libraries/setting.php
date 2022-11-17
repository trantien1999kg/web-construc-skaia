<?php 

	#=================check per===============

	$GLOBAL_LANG=false;

	$GLOBAL_PERMISSION=false;

	#=================check user===============

	$GLOBAL_USER=true;

	$GLOBAL_USER_ADMIN=true;

	$GLOBAL_USER_CLIENT=true;

	#================check member================

	$ORDER=false;

	$MEMBER=false;

	$CONTACT=true;

	$NEWSLETTER=false;

	$BOOKING=true;

	// =======================seo page======================
	$setting['seopage']['page']=array(

		'gioi-thieu'=>"Giới thiệu",

		'du-an'=>'Dự án',

		'dich-vu'=>'Dịch Vụ',	

		'quy-trinh'=>'Quy Trình',

		'tin-tuc'=>'Tin tức',

		'lien-he'=>'Liên hệ'

	);
	$setting['seopage']['mota'] = true;
	$setting['seopage']['mota-ckeditor'] = true;
	$setting['seopage']['noidung'] = true;
	$setting['seopage']['noidung-ckeditor'] = true;
	$setting['seopage']['img-width'] = 300;
	$setting['seopage']['img-height'] = 200;
	$setting['seopage']['img-ratio'] = 1;
	$setting['seopage']['img-b'] = 200;
	$setting['seopage']['thumb'] = '300x200x1';
	$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
	$viewArray=array('htgh','pttt');

	// #========================properties====================
	$nametype='properties';
	$setting['properties'][$nametype]['name']='Thuộc tính sản phẩm';
	$setting['properties'][$nametype]['color']=true;
	$setting['properties'][$nametype]['qty']=true;
	$setting['properties'][$nametype]['price']=true;
	$setting['properties'][$nametype]['photo']=true;
	$setting['properties'][$nametype]['img-height']=285;
	$setting['properties'][$nametype]['img-width']=250;
	$setting['properties'][$nametype]['img-ratio']=2;
	$setting['properties'][$nametype]['img-b']=false;

	//#========================TẠI SAO CHỌN==================== 

	$nametype='tai-sao';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'tại sao';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['imgphu'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

				"title_main_photo" => "Hình ảnh kèm theo",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);



	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	//#========================Quy trình CHỌN==================== 

	$nametype='quy-trinh';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Quy trình';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['imgphu'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

				"title_main_photo" => "Hình ảnh kèm theo",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);



	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// #========================Dịch vụ==================== 

	$nametype='du-an';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dịch vụ';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị",

		"noibat"=>"Nổi Bật",


	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tragop'] = false;

	$GLOBAL['baiviet'][$nametype]['quatang'] = false;

	$GLOBAL['baiviet'][$nametype]['rank'] = false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 255;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['khuyenmai'] = false;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

				"title_main_photo" => "Hình ảnh kèm theo",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = false;

	$GLOBAL['baiviet'][$nametype]['text-search'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['dungtich'] = false;

	$GLOBAL['baiviet'][$nametype]['trangthai'] = false;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = false;

	$GLOBAL['baiviet'][$nametype]['giacu'] = false;

	$GLOBAL['baiviet'][$nametype]['size-product'] = false;

	$GLOBAL['baiviet'][$nametype]['brand'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// DM1
	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"noibat"=>"Nổi Bật",

			"hienthi"=>"Hiển thị",

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 30;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 685;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['links'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-gallery'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

				"title_main_photo" => "Hình ảnh kèm theo",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);

	// #========================dự án==================== 

	$nametype='dich-vu';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Dự án';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị",


	);

	$GLOBAL['baiviet'][$nametype]['status'] = array();

	$GLOBAL['baiviet'][$nametype]['tragop'] = false;

	$GLOBAL['baiviet'][$nametype]['quatang'] = false;

	$GLOBAL['baiviet'][$nametype]['rank'] = false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['imgphu'] = FALSE;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 637;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 439;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['tags'] = false;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['khuyenmai'] = false;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

				"title_main_photo" => "Hình ảnh kèm theo",

				"title_sub_photo" => "Hình ảnh",

				"width_photo" => 500,

				"height_photo" => 500,

				"thumb_width_photo" => 500,

				"thumb_height_photo" => 500,

				"thumb_ratio_photo" => 1,

				"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

			)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = false;

	$GLOBAL['baiviet'][$nametype]['text-search'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['dungtich'] = false;

	$GLOBAL['baiviet'][$nametype]['trangthai'] = false;

	$GLOBAL['baiviet'][$nametype]['color'] = false;

	$GLOBAL['baiviet'][$nametype]['size'] = false;

	$GLOBAL['baiviet'][$nametype]['gia'] = false;

	$GLOBAL['baiviet'][$nametype]['giacu'] = false;

	$GLOBAL['baiviet'][$nametype]['size-product'] = false;

	$GLOBAL['baiviet'][$nametype]['brand'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['cano'] = true;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


// #========================Báo giá==================== 

$nametype='bao-gia';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Báo giá';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = FALSE;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"mucluc"=>"Mục lục",

	"hienthi"=>"Hiển thị",


);

$GLOBAL['baiviet'][$nametype]['status'] = array();

$GLOBAL['baiviet'][$nametype]['tragop'] = false;

$GLOBAL['baiviet'][$nametype]['quatang'] = false;

$GLOBAL['baiviet'][$nametype]['rank'] = false;

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['imgphu'] = FALSE;

$GLOBAL['baiviet'][$nametype]['img-width'] = 255;

$GLOBAL['baiviet'][$nametype]['img-height'] = 255;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 2;

$GLOBAL['baiviet'][$nametype]['img-b'] = false;

$GLOBAL['baiviet'][$nametype]['tags'] = false;

$GLOBAL['baiviet'][$nametype]['khuyenmai'] = false;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = false;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 500,

			"height_photo" => 500,

			"thumb_width_photo" => 500,

			"thumb_height_photo" => 500,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		)

);

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tinhtrang'] = false;

$GLOBAL['baiviet'][$nametype]['text-search'] = true;

$GLOBAL['baiviet'][$nametype]['masp'] = false;

$GLOBAL['baiviet'][$nametype]['dungtich'] = false;

$GLOBAL['baiviet'][$nametype]['trangthai'] = false;

$GLOBAL['baiviet'][$nametype]['color'] = false;

$GLOBAL['baiviet'][$nametype]['size'] = false;

$GLOBAL['baiviet'][$nametype]['gia'] = false;

$GLOBAL['baiviet'][$nametype]['giacu'] = false;

$GLOBAL['baiviet'][$nametype]['size-product'] = false;

$GLOBAL['baiviet'][$nametype]['brand'] = false;

$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

$GLOBAL['baiviet'][$nametype]['title-seo']=true;

$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

$GLOBAL['baiviet'][$nametype]['description-seo']=true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['cano'] = true;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';





// DANH MUC 2

// $GLOBAL['baiviet'][$nametype]['cat'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

// 		"mucluc"=> "Mục lục",

// 		"noibat"=> "Nổi bật",

// 		"spmoi"=>"Danh sách",

// 		"hienthi"=>"Hiển thị"
		
// 	);

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 102;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 102;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

// 	$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	


$nametype='san-pham';

$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

$GLOBAL['baiviet'][$nametype]['full'] = false;

$GLOBAL['baiviet'][$nametype]['check']=array(

	"mucluc"=>"Mục lục",

	"noibat"=>"Nổi bật",

	"hienthi"=>"Hiển thị"

);

$GLOBAL['baiviet'][$nametype]['status'] = array();

$GLOBAL['baiviet'][$nametype]['img'] = true;

$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

$GLOBAL['baiviet'][$nametype]['img-width'] = 304;

$GLOBAL['baiviet'][$nametype]['img-height'] = 177;

$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

$GLOBAL['baiviet'][$nametype]['img-b'] = false;

$GLOBAL['baiviet'][$nametype]['iframe_map'] = false;

$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

$GLOBAL['baiviet'][$nametype]['huong'] = false;

$GLOBAL['baiviet'][$nametype]['loaidat'] = false;

$GLOBAL['baiviet'][$nametype]['schema'] = true;

$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

$GLOBAL['baiviet'][$nametype]['rating'] = false;

$GLOBAL['baiviet'][$nametype]['dientich'] = false;

$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

(

	$nametype=>array

		(

			"title_main_photo" => "Hình ảnh kèm theo",

			"title_sub_photo" => "Hình ảnh",

			"width_photo" => 304,

			"height_photo" => 177,

			"thumb_width_photo" => 304,

			"thumb_height_photo" => 177,

			"thumb_ratio_photo" => 1,

			"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

		 )

);

$GLOBAL['baiviet'][$nametype]['mota'] = true;

$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['noidung'] = true;

$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

$GLOBAL['baiviet'][$nametype]['tukhoa'] = false;

$GLOBAL['baiviet'][$nametype]['tukhoa-ckeditor'] = false;

$GLOBAL['baiviet'][$nametype]['alias'] = true;

$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

$GLOBAL['baiviet'][$nametype]['masp'] = false;

$GLOBAL['baiviet'][$nametype]['color'] = false;

$GLOBAL['baiviet'][$nametype]['gia'] = true;

$GLOBAL['baiviet'][$nametype]['giacu'] = true;

$GLOBAL['baiviet'][$nametype]['brand'] = false;

$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

$GLOBAL['baiviet'][$nametype]['baohanh'] = false;

$GLOBAL['baiviet'][$nametype]['title-seo']=true;

$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

$GLOBAL['baiviet'][$nametype]['description-seo']=true;

$GLOBAL['baiviet'][$nametype]['seo'] = true;

$GLOBAL['baiviet'][$nametype]['tags'] = false;

$GLOBAL['baiviet'][$nametype]['daytin'] = false;

$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

// danh mục cấp 1

$GLOBAL['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

		"mucluc"=> "Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 283;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 283;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 32;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 42;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

// danh mục cấp 2

$GLOBAL['baiviet'][$nametype]['cat'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

	$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

		"mucluc"=> "Mục lục",

		"hienthi"=>"Hiển thị"
		
	);

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 270;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 220;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 30;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 30;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// danh mục cấp 3

	// $GLOBAL['baiviet'][$nametype]['item'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['title'] = 'Danh mục cấp 3';

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['full'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['check_item']=array(

	// 	"mucluc"=>"Mục lục",

	// 	"hienthi"=>"Hiển thị"
	// );

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-width'] = 285;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-height'] = 260;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-ratio'] = 2;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['link_cano'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['seo'] = true;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img-qc'] = false;

	// $GLOBAL_LEVEL3['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#==============================================Giá bán============================================================================
	
	$nametype='gia-ban';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Giá bán';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách giá bán';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['max'] = true;

	$GLOBAL['baiviet'][$nametype]['min'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	#==============================================Giá bán============================================================================
	
	$nametype='dien-tich';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Diện tích';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách diện tích';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['max'] = true;

	$GLOBAL['baiviet'][$nametype]['min'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị",

	);

	#==============================================Giá bán============================================================================
	
		$nametype='huong';

		$GLOBAL['baiviet'][$nametype]['title_main'] = 'Hướng';
	
		$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách hướng';
	
		$GLOBAL['baiviet'][$nametype]['full'] = false;
	
		$GLOBAL['baiviet'][$nametype]['max'] = false;
	
		$GLOBAL['baiviet'][$nametype]['min'] = false;
	
		$GLOBAL['baiviet'][$nametype]['check']=array(
	
			"noibat"=>"Nổi bật",
	
			"hienthi"=>"Hiển thị",
	
		);

	#==============================================Giá bán============================================================================
	
		$nametype='loai-dat';

		$GLOBAL['baiviet'][$nametype]['title_main'] = 'Loại đất';
	
		$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách loại đất';
	
		$GLOBAL['baiviet'][$nametype]['full'] = false;
	
		$GLOBAL['baiviet'][$nametype]['max'] = false;
	
		$GLOBAL['baiviet'][$nametype]['min'] = false;
	
		$GLOBAL['baiviet'][$nametype]['check']=array(
	
			"hienthi"=>"Hiển thị",
	
		);

	#==================================Tác giả====================================

	$nametype='tac-gia';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tác giả';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách tác giả';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

		"mucluc"=>"Mục lục"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 183;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 183;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['link_facebook'] = true;

	$GLOBAL['baiviet'][$nametype]['link_zalo'] = true;

	$GLOBAL['baiviet'][$nametype]['link_twitter'] = true;

	$GLOBAL['baiviet'][$nametype]['link_instagram'] = true;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#============================đối tác khách hàng===============================================

	// $nametype='danh-gia-khach-hang';

	// $GLOBAL['baiviet'][$nametype]['title_main'] = 'Đánh giá khách hàng';

	// $GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	// $GLOBAL['baiviet'][$nametype]['full'] = false;

	// $GLOBAL['baiviet'][$nametype]['check']=array(

	// 	"hienthi"=>"Hiển thị"

	// );

	// $GLOBAL['baiviet'][$nametype]['img'] = true;

	// $GLOBAL['baiviet'][$nametype]['img-width'] = 183;

	// $GLOBAL['baiviet'][$nametype]['rating'] = true;

	// $GLOBAL['baiviet'][$nametype]['icon'] = false;

	// $GLOBAL['baiviet'][$nametype]['img-height'] = 183;

	// $GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['baiviet'][$nametype]['img-gallery'] = false;

	// $GLOBAL['baiviet'][$nametype]['mota'] = true;

	// $GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	// $GLOBAL['baiviet'][$nametype]['noidung'] = false;

	// $GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL['baiviet'][$nametype]['job'] = false;

	// $GLOBAL['baiviet'][$nametype]['seo'] = false;

	// $GLOBAL['baiviet'][$nametype]['alias'] = false;

	// $GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	// $GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#========================Tin tức==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị",

		"noibat"=>"Nổi bật"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 117;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 85;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	// $GLOBAL['baiviet'][$nametype]['list'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

	// 		"mucluc"=> "Mục lục",

	// 		"noibat"=>"Nổi bật",

	// 		"hienthi"=>"Hiển thị"

	// 	);

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 283;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 283;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 45;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 45;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#========================Tin tức==================== 

	$nametype='ky-gui';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Ký gửi';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 317;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 200;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	// $GLOBAL['baiviet'][$nametype]['list'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

	// 		"mucluc"=> "Mục lục",

	// 		"noibat"=>"Nổi bật",

	// 		"hienthi"=>"Hiển thị"

	// 	);

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 256;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 256;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 285;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 347;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 32;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 42;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

	// 	$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#===============================Thư viện ảnh==================================================================

	$nametype='anh-giao-dich';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Thư viện ảnh giao dịch';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		// "mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị",

		"noibat"=>"Nổi bật"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 285;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = false;

	$GLOBAL['baiviet'][$nametype]['schema'] = false;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 285;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 285,

            	"height_photo" => 285,

            	"thumb_width_photo" => 285,

            	"thumb_height_photo" => 285,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);


		#========================Chính sách==================== 

	$nametype='chinh-sach';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Chính sách';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 270;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 220;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	##===================Về chúng tôi========================

	$nametype='gioi-thieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'Về chúng tôi';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý về chúng tôi';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 389;

	$GLOBAL['info'][$nametype]['img-height'] = 301;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);


	##===================Hạng Mục========================

	$nametype='hang-muc';

	$GLOBAL['info'][$nametype]['title_main'] = 'Hạng Mục';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý Hạng Mục';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 389;

	$GLOBAL['info'][$nametype]['img-height'] = 301;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	##===================Video========================

	$nametype='video';

	$GLOBAL['info'][$nametype]['title_main'] = 'Video';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý video';

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 389;

	$GLOBAL['info'][$nametype]['img-height'] = 301;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = false;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['info'][$nametype]['noidung'] = false;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = true;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	#======================================Giới thiệu đầu trang=============================================================

	$nametype='intro-top';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Giới thiệu đầu trang';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 78;

	$GLOBAL['photo'][$nametype]['img-height'] = 78;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = false;

	$GLOBAL['photo'][$nametype]['mota'] = true;

	$GLOBAL['photo'][$nametype]['numb'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================Video============================

	// $nametype='video';

	// $GLOBAL['video'][$nametype]['title_main'] = 'video';

	// $GLOBAL['video'][$nametype]['title'] = 'Quản lý video';

	// $GLOBAL['video'][$nametype]['full'] = false;

	// $GLOBAL['video'][$nametype]['upload'] = false;

	// $GLOBAL['video'][$nametype]['img'] = true;

	// $GLOBAL['video'][$nametype]['img-width'] = 590;

	// $GLOBAL['video'][$nametype]['img-height'] = 291;

	// $GLOBAL['video'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['video'][$nametype]['link'] = true;

	// $GLOBAL['video'][$nametype]['mota'] = false;

	// $GLOBAL['video'][$nametype]['mota-ckeditor'] = false;

	// $GLOBAL['video'][$nametype]['noidung'] = true;

	// $GLOBAL['video'][$nametype]['noidung-ckeditor'] = true;

	// $GLOBAL['video'][$nametype]['seo'] = false;

	// $GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#======================================Video list=============================================================

	// $nametype='video';

	// $GLOBAL['video'][$nametype]['title_main'] = 'Video';

	// $GLOBAL['video'][$nametype]['title'] = 'Danh sách';

	// $GLOBAL['video'][$nametype]['full'] = false;

	// $GLOBAL['video'][$nametype]['img'] = true;

	// $GLOBAL['video'][$nametype]['img-width'] = 78;

	// $GLOBAL['video'][$nametype]['img-height'] = 78;

	// $GLOBAL['video'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['video'][$nametype]['link'] = true;

	// $GLOBAL['video'][$nametype]['mota'] = false;

	// $GLOBAL['video'][$nametype]['numb'] = false;

	// $GLOBAL['video'][$nametype]['mota'] = false;

	// $GLOBAL['video'][$nametype]['mota-ckeditor'] = false;

	// $GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Slider============================

	$nametype='slider';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['video'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 1440;

	$GLOBAL['photo'][$nametype]['img-height'] = 674;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================mạng xã hội============================

	$nametype='mangxahoi';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================MXH Tư Vấn============================

	$nametype='tuvan';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Công cụ Tư Vấn';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Kết nối footer============================

	$nametype='ketnoi';

	$GLOBAL['photo'][$nametype]['title_main'] = 'MXH Kết nối Footer';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='logo';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 100;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='logo_mobile';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo mobile';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo mobile';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo footer============================

	$nametype='logo_footer';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo footer';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo footer';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';



	#====================Icon giới thiệu============================

	$nametype='icon_GT';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon giới thiệu';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon giới thiệu';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Icon Video============================

	$nametype='icon_VIDEO';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon Video';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon Video';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================Icon Quy trình============================

	$nametype='icon_QT';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon Quy trình';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon Quy trình';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Icon Nhận tin============================

	$nametype='icon_TTTV';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon Nhận tin';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon Nhận tin';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Icon Kiến thức xây dựng============================

	$nametype='icon_KTXD';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Icon Kiến thức xây dựng';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Icon Kiến thức xây dựng';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 85;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================bg đăng ký============================

	$nametype='bg-dangky';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background đăng ký';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background đăng ký';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 640;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================Hình ảnh liên hệ============================

	$nametype='ha-lienhe';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh liên hệ';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh liên hệ';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 570;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 300;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================bg footer============================

	$nametype='bg_footer';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background footer';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background footer';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 556;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================hình đại diện============================

	$nametype='hinhdaidien';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================booking============================

	#====================================================ĐĂNG KÝ NHẬN TIN====================================

	$nametype='client';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký tư vấn';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký tư vấn';

	$GLOBAL['booking'][$nametype]['ten'] = true;

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['ngaytao'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#====================================================ĐĂNG KÝ NHẬN TIN====================================

	$nametype='yeu-cau';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký tư vấn';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý đăng ký tư vấn';

	$GLOBAL['booking'][$nametype]['ten'] = true;

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = false;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['dientich'] = false;

	$GLOBAL['booking'][$nametype]['taichinh'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['ngaytao'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#====================================================ĐĂNG KÝ NHẬN TIN====================================

	$nametype='bao-gia';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['title'] = 'Quản lý Đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 263;

	$GLOBAL['booking'][$nametype]['img-height'] = 274;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = true;

	$GLOBAL['booking'][$nametype]['ngaytao'] = true;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#================================================Yêu cầu gọi lại======================================================================

	// $nametype='goi-lai';

	// $GLOBAL['booking'][$nametype]['title_main'] = 'Yêu cầu gọi lại';

	// $GLOBAL['booking'][$nametype]['title'] = 'Quản lý Yêu cầu gọi lại';

	// $GLOBAL['booking'][$nametype]['full'] = false;

	// $GLOBAL['booking'][$nametype]['img'] = true;

	// $GLOBAL['booking'][$nametype]['img-width'] = 380;

	// $GLOBAL['booking'][$nametype]['img-height'] = 260;

	// $GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	// $GLOBAL['booking'][$nametype]['phone'] = true;

	// $GLOBAL['booking'][$nametype]['email'] = false;

	// $GLOBAL['booking'][$nametype]['dichvu'] = false;

	// $GLOBAL['booking'][$nametype]['diachi'] = false;

	// $GLOBAL['booking'][$nametype]['noidung'] = false;

	// $GLOBAL['booking'][$nametype]['ngaytao'] = true;

	// $GLOBAL['booking'][$nametype]['seo'] = false;

	// $GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#====================footer============================

	$nametype='footer';

	$GLOBAL['company'][$nametype]['title_main'] = 'Thông tin liên hệ footer';

	$GLOBAL['company'][$nametype]['title'] = 'Thông tin liên hệ footer';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = false;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = true;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================company============================

	$nametype='lien-he';

	$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
	
	#====================setting============================

	$GLOBAL['setting']['tieude']=true;

	$GLOBAL['setting']['diachi']=true;

	$GLOBAL['setting']['chaychu1']=true;

	$GLOBAL['setting']['chaychu2']=true;

	$GLOBAL['setting']['slogan']=false;

	$GLOBAL['setting']['mota']=false;

	$GLOBAL['setting']['timework']=false;

	$GLOBAL['setting']['time']=false;

	$GLOBAL['setting']['email']=true;

	$GLOBAL['setting']['hotline']=true;

	$GLOBAL['setting']['hotline-advance']=true;

	$GLOBAL['setting']['page_video']=false;

	$GLOBAL['setting']['dienthoai']=true;

	$GLOBAL['setting']['page_in']=true;

	$GLOBAL['setting']['page_ne']=true;

	$GLOBAL['setting']['page_sp']=true;

	$GLOBAL['setting']['postalcode']=true;

	$GLOBAL['setting']['tax_code']=false;

	$GLOBAL['setting']['blank']=false;

	$GLOBAL['setting']['denominator']=false;

	$GLOBAL['setting']['symbol']=false;

	$GLOBAL['setting']['code']=false;

	$GLOBAL['setting']['city']=true;

	$GLOBAL['setting']['district']=true;

	$GLOBAL['setting']['message']=true;

	$GLOBAL['setting']['counter']=false;

	$GLOBAL['setting']['zalo']=true;

	$GLOBAL['setting']['website']=true;

	$GLOBAL['setting']['laisuat']=false;

	$GLOBAL['setting']['phivanchuyen']=false;

	$GLOBAL['setting']['toado']=true;

	$GLOBAL['setting']['seo']=true;

	$GLOBAL['setting']['iframe']=true;

	$GLOBAL['setting']['iframe1']=true;

	$GLOBAL['setting']['fanpage']=true;

	$GLOBAL['setting']['copyright']=false;

	$GLOBAL['setting']['faceid']=true;

	$GLOBAL['setting']['toc']=true;

	$GLOBAL['setting']['block']=false;

	$GLOBAL['setting']['slider']=false;

	$GLOBAL['setting']['linksyoutube']=false;

	$GLOBAL['setting']['links']=false;

	$GLOBAL['setting']['slide']=false;

	$GLOBAL['setting']['nonecopy']=false;

	$GLOBAL['setting']['background']=true;

	$GLOBAL['setting']['watermark']=false;

	$GLOBAL['setting']['slider_video']=false;

	$GLOBAL['setting']['tag']=false;

	$GLOBAL['setting']['changedola']=false;

	$GLOBAL['setting']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

?>