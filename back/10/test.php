<?php

// var_dump($_SERVER);

/*
$url = 'http://www.baidu.com:80/index.php?username=goudan';
$arr = parse_url($url);
var_dump($arr);*/

/*
$str = 'username=goudan&password=123456';
parse_str($str, $arr);
var_dump($arr);*/

$arr = ['username' => 'goudan', 'password' => 123456];
$str = http_build_query($arr);
var_dump($str);