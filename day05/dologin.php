<?php

$username = 'zhangsan';
$pass = '123';

if($username == $_GET['username'] && $pass == $_GET['pass']){
	 setcookie('username', $username, time()+60*60, '/');
     echo '登录成功';	
}else{
	 echo '登录失败';
}