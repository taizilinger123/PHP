<?php

session_start();//你想用session必须开启

//setcookie('', '' time , '/');

$_SESSION['username'] = 'zhangsan';
$_SESSION['password'] = 123;
unset($_SESSION['username']);
session_destroy();

var_dump($_SESSION);