<?php 

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';
try{
    $pdo = new PDO($dsn, 'root', '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die('数据库连接失败'.$e->getMessage());
}

try{
	//开启一个事物
	$pdo->beginTransaction();
	
	$sql = 'update user set money=money-500 where id=1';
	$ret = $pdo->exec($sql);

	if($ret > 0){
        echo '狗蛋转出成功<br />';
	}else{
        //echo '狗蛋转出失败<br />';
        throw new PDOException('狗蛋转出失败');
	}

    $sql = 'update user set money=money+500 where id=2';
	$ret = $pdo->exec($sql);

	if($ret > 0){
        echo '毛蛋转入成功<br />';
	}else{
        throw new PDOException('毛蛋转入失败');
	}

	$pdo->commit();
	echo '交易成功<br />';
}catch(PDOException $e){
	$pdo->rollback();
	echo $e->getMessage();
}