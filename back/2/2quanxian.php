<?php 

class Person
{
	public $name;
	protected $age;
	private $height;

	public function __construct($name, $age, $height)
	{
         $this->name = $name;
         $this->age = $age;
         $this->height = $height;
	}
}

$xiaoming = new Person('小明', 10, 176);
echo $xiaoming->name;
echo $xiaoming->age;
echo $xiaoming->height;