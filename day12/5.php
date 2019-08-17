<?php

//preg_replace();

$string = '<div>你好我好大家好</div>';

//echo  $string;

$pattern = '/<div>(.*)<\/div>/';

$replace = '<h1>我是被替换以后的</h1>';

$newStr = preg_replace($pattern, $replace, $string);

var_dump($newStr);

echo $newStr;
