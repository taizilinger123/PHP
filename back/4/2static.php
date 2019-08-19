<?php 

class Person
{
	static public $name = '小芳';
	public static function test()
	{
		/*$this->wang(); 静态方法中不能出现$this关键字,因为静态方法是属于整个类的，不是属于某个对象的，是通过类名调用的
		而$this代表的是当前对象，$this是通过对象调用的*/
		echo '这是静态方法';
	}

	public function wang()
	{
		echo '汪汪';
	}

	public function demo()
	{
		echo self::$name;
		self::test();
	}
}

$niu = new Person();
$niu->demo();

//echo  Person::$name;
//Person::test();



