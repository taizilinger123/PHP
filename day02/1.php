<?php
//遍历
$arr = ['a'=>'aaa','b'=>'bbb','c'=>'ccc'];
//$arr = [1,2,3,1,2,3];
//echo  $arr['a'];

//notepad++单行、多行注释  //方式        ：ctrl+k
//区块注释                 / * */ 方式    ：ctrl+q
//取消单行、多行、区块注释               ：ctrl+shift+k
/*
foreach($arr as $key => $value){
	   //echo  $arr[$key].'<br />';
	   
	   echo  $key . '----------' . $value . '<br />';	   
}
*/

foreach($arr as $val){
	
	echo $val.'<br />';
}
