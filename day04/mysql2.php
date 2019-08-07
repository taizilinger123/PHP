<?php

$link = mysqli_connect('localhost','root','123456');

if(!$link){
	exit('数据库连接失败');
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'bbs');  //use bbs 

//$sql = "select * from bbs_user";
$sql = "insert into bbs_user values(12,'测试','123','地址',1,18)";
echo $sql;

$obj = mysqli_query($link, $sql);//返回一个对象
//var_dump($res);
//$res = mysqli_fetch_assoc();   //一个一个往下读的，返回的是一个一维的关联数组(必须记住)
//$res = mysqli_fetch_row($obj);  //返回一个索引数组
//$res = mysqli_fetch_array($obj); //返回一个既有索引又有关联的数组
//$res = mysqli_num_rows($obj);    //返回查询时候的结果集的总条数
//$res = mysqli_affected_rows($link); //返回你修改，删除，添加的时候的受影响的行数
$res = mysqli_insert_id($link);     //返回的是你插入的当前的数据的自增的id

var_dump($res);


mysqli_close($link);