<?php

	if(!defined('_lib')) die("Errors");



	date_default_timezone_set('Asia/Ho_Chi_Minh');



	$config=array(



		'arrayDomainSSL' => array(),



		'website'=>array(



			'server-name'=>$_SERVER['SERVER_NAME'],



			'url'=>'/web-skaia-0090922W/',



			'debug-css' => false,



			'debug-js'=>true,



			'debug-responsive'=>true,



			'error-reporting'=>false,



			'robots'=>'index,follow',



			'upload' => array(

				

				'max-width' => 1600,



				'max-height' => 1600

			),

		),

		'database'=>array(



			'type' => 'mysql',



			'host' => 'localhost',



			'username' => 'root',



			'password' => '',



			'url'=>'/web-skaia-0090922W/upload/',



			'dbname'=> 'db_xdskaia',



			'port' => 3306,



			'prefix' => 'table_',



			'charset' => 'utf8'

			

		),
		'login-lock'=>array(

		

			'attempt'=>5,



			'delay'=>15

		),

		'mail'=>array(



			'ip'=>'103.1.238.142',



			'email'=>'no-reply@cuchiland.com',



			'password'=>'TPURG9yjmC',



			'smtp' => true,



			'secure' => 'ssl',



			'port' => 465,

			

			'gmail' => false



		),

		'author'=>array(



			'name'=>'',



			'email'=>'',



			'create'=>date('d/m/Y H:i:s')



		),

		'seo-debug'=>array(

			'index'=>'Trang chủ',

			'projects/project'=>'Ký gửi',

			'products/product'=>'Nhà đất bán',

			'news/news'=>'Tin tức',

			'news/tacgia'=>'Tác giả',

			'news/news_static'=>'Chính sách',

			'news/news_detail'=>'Trang chi tiết bài viết',

			'products/product_detail'=>'Chi tiết nhà đất',

			'pages/baiviet'=>'Trang tĩnh ( vd: giới thiệu...)'
		),

		'seo-lang'=>array(



			'vi'=>'Vi',


		),

		'cart-advance'=>false,



		'lang'=>array('vi'=>'Vi'),



		"faceid"=>"582534979152027",



		'salt'=>'^29#_%z/@$',



		'secret'=>'@287Rzx_^!*95&'

	);

	// firewall



	$fw_conf['firewall']=false; //Bat tat firewall



	$fw_conf['max_lockcount']=10;//So lan toi da phat hien dau hieu DDOS va khoa IP do vinh vien 



	$fw_conf['max_connect']=15;//So ket noi toi da dc gioi han boi $fw_conf['time_limit']



	$fw_conf['time_limit']=3;//Thoi gian dc thuc hien toi da $fw_conf['max_connect'] ket noi



	$fw_conf['time_wait']=5;//Thoi gian cho de dc mo khoa khi IP bi khoa tam thoi



	$fw_conf['email_admin']='trantien1999kg@gmail.com';//Email lien lac voi Admin



	$fw_conf['htaccess']=".htaccess";//Duong dan toi file htaccess tren server



	$fw_conf['ip_allow']='127.0.0.1';



	$fw_conf['ip_deny']='';

	

	/* Error reporting */

	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);



	/* Cấu hình base */

	require_once _lib.'checkSSL.php';



	$check_ssl = new checkSSL();



	$http = $check_ssl->getProtocol();



	$config_url = $config['website']['server-name'].$config['website']['url'];



	$https_config = $http.$config_url;



	// cấu hình upload

	require_once _lib."constant.php";

?>