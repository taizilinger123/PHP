<?php 

class Person
{
	public $name;
	public $age;

	public function  __construct($name, $age)
	{
	   //在类里面如何访问自己的成员属性
	   //$this 代表的就是当前对象
	   $this->name = $name;
	   $this->age = $age;
       // echo '小样，调用我了吧';
	}

   public function test1()
   {
   	   echo '今天天气真好<br />';
   }

   public function  test2()
   {
      $this->test1();
      echo '我想约女朋友去看电影<br />';
   }	
}

$niu = new Person('小牛',20);
$niu->test2();

/*
$ming = new Person('小明', 20);
var_dump($ming);
$niu = new Person('小牛', 18);
var_dump($niu);*/


/*
$ming = new Person();
$ming->name = '小明';
$ming->age = 20;
var_dump($ming);

$niu = new Person();
$niu->name = '小牛';
$niu->age = 18;
var_dump($niu);*/


