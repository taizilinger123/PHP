<?php

session_start();

if(empty($_SESSION['username'])){
	exit('你没有登录,不允许查看下面的数据');
}else{
	echo '欢迎您：'.$_SESSION['username'];
}