<?php 

var_dump($name);
echo '$name后续代码<br />';
include('2.php');
echo 'include 后续代码<br />';

add();
echo '我是add方法下面的代码';

//notice Warning后续代码会继续执行
//Fatal error后续代码不会执行
//error_log = "G:/wampserver/path/wamp/logs/php_error.log"  php.ini里的php错误日志位置
