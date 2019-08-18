<?php 

class Animal
{
	public $name = '科比';
	protected $age = 35;
	private $height = 2;
}

class Person extends Animal
{
	public function say()
	{   
		//ctrl+shift+d复制当前行到下一行
		echo '我的姓名是'.$this->name.'<br />';
		echo '我的年龄是'.$this->age.'<br />';
		echo '我的身高是'.$this->height.'<br />';
	}
}

$ming = new Person();
$ming->say();

/*
在类的外部，只可以直接访问public 
public和protected都可以被子类继承
private不可以被子类继承
                   外部访问      子类继承
public             可以           可以
protected          不可以         可以
private            不可以         不可以
上面的访问控制符对属性和方法的修饰功能是一样的*/