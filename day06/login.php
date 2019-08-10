<?php

session_start();

//var_dump($_GET);

$username = $_GET['username'];
$password = $_GET['password'];

if($username == 'zhangsan' && $password == 123){
	 echo  '登录成功';
	 $_SESSION['username'] = $username;
}else{
	 echo  '登录失败';
}