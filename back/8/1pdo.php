<?php

/*
$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';
$pdo = new PDO($dsn, 'root', '12345');
var_dump($pdo);*/

/*
$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';

try {
	$pdo = new PDO($dsn, 'root', '123456');
} catch (Exception $e) {
	die($e->getMessage());
}*/

try {
	$pdo = new PDO('uri:file:///G:\wampserver\path\www\back\8\dsn.txt', 'root', '123456');
} catch (PDOException $e) {
	die($e->getMessage());
}