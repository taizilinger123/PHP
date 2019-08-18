<?php 

class Person
{
	public $name;
	protected $age;
	private $height;

	public function __unset($name)
	{   
		if ($name == 'age') {
			 unset($this->$name);
		}
        //echo $name;
	}

	public function __set($name, $value)
	{
		if ($name == 'age') {
			 $this->$name = $value;
		}
	}

	public function __get($name)
	{
		if($name == 'age'){
			return $this->$name;
		}
	}

	public function __isset($name)
	{
		if ($name == 'age') {
			  return isset($this->$name);
		}
	}

	public function  __destruct()
	{
		echo '这个人被杀死了';
	}
}

$niu = new Person();
//$niu->name = 'hehe';
$niu->age = 100;
//echo $niu->age;

var_dump(isset($niu->age));

/*
unset($niu->age);
var_dump($niu);*/