<?php 
/*
人类
{
	年龄；
	吃饭
}*/

class Person
{
	public $age;
	public function eat()
	{
		echo '我在吃饭';
	}
}

// $xiaoming = new Person();

$name = 'Person';
$xiaoming = new $name();

// var_dump($xiaoming->age);
//$xiaoming->eat();
$xiaoming->age = 18;
var_dump($xiaoming->age);
