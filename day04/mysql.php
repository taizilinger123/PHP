<?php
//1.连接数据库
$link = mysqli_connect('localhost','root','123456');
//var_dump($link);

//2.判断是否连接成功
if(!$link){
	exit('数据库连接失败');
}

//3.设置字符集
mysqli_set_charset($link, 'utf8');

//4.选择数据库
mysqli_select_db($link, 'bbs');

//5.准备sql语句  //select update insert delete
$sql = "select * from bbs_user";

//6.发送sql语句
$res = mysqli_query($link, $sql);  //返回一个对象
//var_dump($res);

//7.处理结果集
$result = mysqli_fetch_assoc($res); //一个一个往下读的，返回的是一个一维的关联数组(必须记住)
$result = mysqli_fetch_assoc($res);
$result = mysqli_fetch_assoc($res);
var_dump($result);


//8.关闭数据库(释放资源)
mysqli_close($link);