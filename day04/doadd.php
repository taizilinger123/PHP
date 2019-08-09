<?php

//得到你要添加的数据
$username = $_GET['username'];
$password = md5($_GET['password']);
$address = $_GET['address'];
$age = $_GET['age'];
$sex = $_GET['sex'];

//var_dump($_GET);

$link = mysqli_connect('localhost','root','123456');

if(!$link){
	exit('数据库连接失败');
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'bbs');  

$sql = "insert into bbs_user(username, password, sex, age, address) values('$username', '$password', '$sex','$age','$address')";

$result = mysqli_query($link, $sql);
$id = mysqli_insert_id($link);
//var_dump($id);
if($id){
	echo '添加成功<a href="userlist.php">返回首页</a>';
}else{
	echo '添加失败';
}

mysqli_close($link);