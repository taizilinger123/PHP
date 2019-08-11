<?php

$arr = getimagesize('1.jpg');

//var_dump($arr);

list($width, $height) = $arr;

echo  $width, $height;