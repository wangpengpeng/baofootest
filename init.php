<?php
	header("Content-type: text/html; charset=utf-8");
	require "BaofooSdk.php";
//	$baofooSdk = new BaofooSdk(100000178, 100000859,'xml','D:\\Develop\\workspace\\php\\cer\\m_pri.pfx','D:\\Develop\\workspace\\php\\cer\\baofoo_pub.cer','123456');
	$baofooSdk = new BaofooSdk(100000178, 100000859,'xml','/home/wpp/www/baofoo4.1.2/demo/baofoo_demo/cer/m_pri.pfx','/home/wpp/www/baofoo4.1.2/demo/baofoo_demo/cer/baofoo_pub.cer','123456');
?>