<?php

$str = 'abcde';

//$pattern = '/abc/';
//$pattern = '#abc#';
$pattern = '-abc-';  //哪些不能作为定界符 a-z A-Z 0-9 空格 \ 推荐使用/ /

var_dump(preg_match($pattern, $str, $matchs));

var_dump($matchs);