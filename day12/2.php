<?php

$str = '\n asdsd';

//$pattern = '/0/';  //a-z A-Z 0-9 空格 __

//$pattern = '/\d/';  // 0-9

//$pattern = '/\D/';  //非0-9

//$pattern = '/\w/'; //a-z A-Z 0-9 _

//$pattern = '/\W/'; //非a-z A-Z 0-9 _

//$pattern = '/\s/'; //匹配空格 回车 换行 tab 

//$pattern  = '/\S/';

//$pattern = '/[^a-z]/';  //^

$pattern = '/./';

preg_match($pattern, $str, $match);

var_dump($match);