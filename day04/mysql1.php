<?php

$link = mysqli_connect('localhost','root','123456');

if(!$link){
	exit('数据库连接失败');
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'bbs');  //use bbs 

$sql = "select * from bbs_user";

$obj = mysqli_query($link, $sql);
//var_dump($res);

while($rows = mysqli_fetch_assoc($obj)){
	var_dump($rows);
}


mysqli_close($link);