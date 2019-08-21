<?php 

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';
try{
    $pdo = new PDO($dsn, 'root', '123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die('数据库连接失败'.$e->getMessage());
}

try{
	//预处理，我们以插入语句为例
	//$stmt = $pdo->prepare('insert into user(name, password, money)values(?, ?, ?)');
	//$stmt->execute(['赵云', '456', 2000]);
	//$stmt = $pdo->prepare('insert into user(name, password, money)values(:name, :mima, :money)');
	//$stmt->execute([':name' => '刘备', ':mima' => '123', ':money' => 1000]);
	/*
	$stmt = $pdo->prepare('delete from user where id=?');
	$stmt->execute([1]);*/
    $stmt = $pdo->prepare('update user set name=:name where id=:id');
    $stmt->execute([':name' => '曹操', ':id' => 2]);

	/*
    $stmt->bindParam(':name', $name);
	$stmt->bindParam(':mima', $pwd);
	$stmt->bindParam(':money', $money);*/

	/*
	$stmt->bindParam(1, $name);
	$stmt->bindParam(2, $pwd);
	$stmt->bindParam(3, $money);*/
    /*
	$name = '沙和尚';
	$pwd = '12345';
	$money = 3000;
	$stmt->execute();

	$name = '唐僧';
	$pwd = 'abcde';
	$money = 4000;
	$stmt->execute();*/
	/*
	$pdo->exec('insert into user(name, password, money)values("hehe", "123", 1000)');
	$pdo->exec('insert into user(name, password, money)values("haha", "123", 1000)');
	$pdo->exec('insert into user(name, password, money)values("yoyo", "123", 1000)');*/

}catch(PDOException $e){
    echo $e->getMessage();
}