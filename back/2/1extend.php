<?php 

class Animal
{
	public $name = '小芳';
	public function eat()
	{
		echo '我会吃饭';
	}
}

class Person extends Animal
{
    public $age = 10;
}

$xiaoming = new Person();
//echo $xiaoming->name;
//$xiaoming->eat();
echo $xiaoming->age;