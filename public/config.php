<?php 
//定义根目录路径
defined('DAWN_PATH') or define('DAWN_PATH', dirname(__file__) .'/' );

//域名
//$site_url='http://www.dawneve.com';
$site_url='http://'.$_SERVER['SERVER_NAME'].'/';//string(22) "http://seq.dawneve.cc/"

//echo getcwd();          //I:\xampp\htdocs\applygene
//echo dirname(__file__); //I:\xampp\htdocs\applygene\public
//echo DAWN_PATH;         //I:\xampp\htdocs\applygene\public/

	
//设置时区
date_default_timezone_set('PRC'); //设置中国时区 
	

//当前的菜单是否当前
if(!isset($page_category)){
	$page_category='home';
}
//设置当前页面显示当前样式
function current_menu($key='home'){
	global $page_category;

	if($key==$page_category){
		echo ' current-menu-ancestor ';
	}
	//die();
}
		
	
/*
	$site_url='http://www.applybio.com';
	include( getcwd() .'/public/'. 'config.php'); 
*/
