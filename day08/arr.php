<?php
$arr = range('a', 'z');
shuffle($arr);

//var_dump($arr);

$tmp = array_slice($arr, 0, 5);

$string = join('', $tmp);
var_dump($string);