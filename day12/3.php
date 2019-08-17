<?php

//$str = 'aaaabcdef';

//$pattern = '/A*/';

//$pattern = '/a+/';

//$pattern = '/a?/';

//$pattern = '/a{0,}/';  //{n,m}

//$pattern = '/^a.+f$/';

//$pattern = '/ABC/i';

//$pattern = '/abc/m';

$str = "bcdffgg hhhhhhhhhabc";

//$pattern = '/^abc/m';

//$pattern = '/^bcd.+abc$/s';

$pattern = '/h+/U';

preg_match($pattern, $str, $match);


if(preg_match($pattern, $str, $match)){
	echo '匹配成功结果是:';
	var_dump($match);
}else{
	echo '失败';
}