<?php

//var_dump($_GET);
//var_dump($_POST);
//var_dump($_REQUEST);
//简单实现一个用户登录

$username = $_GET['username'];
$password = $_GET['password'];

$user = '张三';
$pass = '123123';

if($username == $user && $password == $pass){
	echo "登陆成功";
}else{
	echo "登录失败";
}