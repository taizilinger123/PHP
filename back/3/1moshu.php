<?php 

class Person 
{
	public $name = '小明';
	protected $age = 18;
	private $height = 187;

	public function __get($name)
	{
		if($name == 'age'){
			return $this->age;
		}
		//echo $name;
	}

	public function __set($name, $value)
	{
		if ($name == 'age') {
			$this->age = $value;
		}
		//var_dump($name, $value);
	}
}

$niu = new Person();

//echo $niu->age;
$niu->age = 20;
echo $niu->age;