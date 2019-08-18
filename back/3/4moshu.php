<?php 

class Person 
{
	public $name;
	public $age;
	public $height;
    
    //不写修饰符默认是public
	function __construct($name, $age, $height)  
	{
		$this->name = $name;
		$this->age = $age;
		$this->height = $height;
	}

	function  __sleep()
	{
		//echo '我要睡觉了';
		return ['age', 'height'];
	}

	function __wakeup()
	{
		echo '我睡醒了';
	}

	function __clone()
	{
		$this->age = 20;
	}
}

function  __autoload($className)
{
	$file = $className.'.php';
	include $file;
}

$dog = new Dog();
$dog->wang();

/*
$niu = new Person('niu', 19, 180);

$obj = clone $niu;
var_dump($obj);*/

/*
$str = file_get_contents('niu.txt');
$obj = unserialize($str);
var_dump($obj);*/

/*
$str = serialize($niu);
file_put_contents('niu.txt', $str);*/
//echo $str;