<?php 
//数据记录
function MYlog($str="aaaaaa"){
	//$str="aaaaaa"; //文本
	$file="leave_message.txt"; //文件名 如果在文件夹下 就是 book/book.txt
	$fp=fopen($file,"a");//得到指针
	
	//设置时区
	date_default_timezone_set('PRC'); //设置中国时区 
	
	fwrite($fp,'Time: '.date("Y-m-d H:i:s", time())."\n");//写入换行
	fwrite($fp,$str);//写
	fwrite($fp,"========================== \n\n");//写
	fclose($fp);//关闭
}

//获取邮箱
$fback = $_POST['fback'];

// {"name":"","email":"","company":"","theme":"","type":"0","content":"32421"}, 
$msg = 'name: ' . $fback['name'] ."\n";
$msg .= 'email: ' . $fback['email'] ."\n";
$msg .= 'company: ' . $fback['company'] ."\n";
$msg .= 'theme: ' . $fback['theme'] ."\n";
$msg .= 'type: ' . $fback['type'] ."\n";
$msg .= 'content: ' . $fback['content'] ."\n";


//记录留言
MYlog($msg);


//返回结果
$info = " 您留言已经被记录，我们会尽快回复。";
echo json_encode(array(
	'status' => 1,
	'info' => $info
));
?>