<?php 

abstract class ShengWu
{
	abstract public function jump();
}

abstract class Person extends ShengWu
{
	public $name;
	public function say()
	{
		echo '说出自己的名字';
	}

	abstract public function eat($name = 5);
}

class Man extends Person
{
    public function eat($name = 5)
    {
    	echo '今天早上我吃的面包，大家吃的什么';
    }

    public function jump()
    {
    	echo '我能立定跳远2米';
    }
}
//$p = new Person();//报错,抽象类不能被实例化