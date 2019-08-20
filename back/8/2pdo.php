<?php

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';
try{
    $pdo = new PDO($dsn, 'root', '123456');
    //设置错误模式
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die('数据库连接失败'.$e->getMessage());
}

try{
	//$sql = 'insert into user(name, password, money)values("maodan", "123456",1000)';
	//$sql = 'update user set money=2000 where id=1';
	$sql = 'select * from user';
	//$ret = $pdo->exec($sql);
	$ret = $pdo->query($sql);

    var_dump($ret);

	/*
	if($ret > 0){
		echo '更新成功';
	    //echo '插入成功<br />';
	    //echo $pdo->lastInsertId();
	}else{
		echo '更新失败';
	    //echo '插入失败';
	}*/
}catch(PDOException $e){
	echo $e->getMessage();
}