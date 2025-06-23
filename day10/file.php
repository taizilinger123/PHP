<?php

$fp = fopen('c.txt', 'a+');

//var_dump($fp);

$str = 'abcdefg';

fwrite($fp, $str);
fseek($fp, 0);
echo fread($fp, 3);

fclose($fp);
============================================================================
// mysqli_fetch_row()
$row = mysqli_fetch_row($result);
echo $row[0];

// mysqli_fetch_assoc()
$row = mysqli_fetch_assoc($result);
echo $row['name'];

// mysqli_fetch_array()
$row = mysqli_fetch_array($result);
echo $row[0];
echo $row['name'];

// mysqli_fetch_object()
$row = mysqli_fetch_object($result);
echo $row->name;

row 是数字索引
assoc 用字段名字
array 两者都在
object 是面向对象

row 是数字，assoc 是名字，array 全都有，object 是对象。
