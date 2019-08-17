<?php

// http://www.baidu.com  org cn net 

//https://www.baidu.com 

//www.baidu.com 
//baidu.com 

//$str = 'http://www.baidu.com';
$str = 'www.baidu.com';
$pattern = '/(http|https)?(:\/\/)?(\w+.?)(\w+.?)(\w+.?)/';

if(preg_match($pattern, $str, $match)){
        echo '匹配成功';
        var_dump($match);		
}else{
	    echo '失败';
}