<?php

$arr = ['a','b','c','d'];

//var_dump($arr); //var_dump打印值和数据类型
//获取数组的值
echo $arr[0];

//添加一个元素
$arr[4] = '这是我新添加的';
//删除一个元素
unset($arr[2]);
var_dump($arr);

