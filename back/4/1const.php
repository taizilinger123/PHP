<?php 

class Person 
{
	const ABC = 1000;
	public $name;
	public $age;

	function test()
	{
		echo self::ABC;
	}
}

$niu = new Person();
$niu->test();

//echo Person::ABC;