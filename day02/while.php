<?php

$arr = ['a','b','c','d','e','f'];

/*
while(list($key, $val) = each($arr)){
	echo $key.'----'.$val.'<br />';
}
*/

list($key, $val) = each($arr);

echo  $key, $val;