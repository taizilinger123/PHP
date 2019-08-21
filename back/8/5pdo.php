<?php 

try{
	$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';
	$pdo = new PDO($dsn, 'root', '123456');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
}catch(PDOException $e){
     die('数据库连接失败'.$e->getMessage());
}

try{
	$stmt = $pdo->prepare('select name, password, money from user');
	$stmt->execute();

	$stmt->bindColumn('name', $name);
	$stmt->bindColumn('password', $pwd);
	$stmt->bindColumn('money', $money);

	echo '<table border="1" width="800" align="center">';
	while($stmt->fetch()){
        echo '<tr>';
        echo '<td>'.$name.'</td>';
        echo '<td>'.$pwd.'</td>';
        echo '<td>'.$money.'</td>';
        echo '</tr>';
	}
	echo '</table>';
	// $result = $stmt->fetch(PDO::FETCH_ASSOC);
	//$result = $stmt->fetch(PDO::FETCH_NUM);
	/*$result = $stmt->fetchAll();
	var_dump($result);*/
}catch(PDOException $e){
	echo $e->getMessage();
}