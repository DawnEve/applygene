<?php 
/*
测试数据
$_POST['sub']=array(
	'email'=>'wjl@163.com'
);
*/


//数据记录
function MYlog($str="aaaaaa"){
	//$str="aaaaaa"; //文本
	$file="email_list.txt"; //文件名 如果在文件夹下 就是 book/book.txt
	$fp=fopen($file,"a");//得到指针
	
	//设置时区
	date_default_timezone_set('PRC'); //设置中国时区 
	
	fwrite($fp,date("Y-m-d H:i:s", time())."\t");//写入换行
	fwrite($fp,$str . ", \n");//写
	fclose($fp);//关闭
}



//获取邮箱
$sub = $_POST['sub'];
$email = $sub['email'];
//echo json_encode($email);


//记录邮件
MYlog($email);


//返回结果
$info = $email . " 已经添加到邮件列表!";
echo json_encode(array(
	'status' => 1,
	'info' => $info
));
?>