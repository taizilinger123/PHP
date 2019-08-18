<?php 

class Father
{
	public $name;
	public $age;
	public function __construct($name, $age)
	{ 
        $this->name = $name;
        $this->age = $age;
	}
	public function jump()
	{
		echo '我能跳3米<br />';
	}
	protected function work()
	{
		echo '我勤勤恳恳的工作<br />';
	}
}

class Son  extends Father
{   
	public $height;
	public $weight;
	public function __construct($name, $age, $height, $weight)
	{
		parent::__construct($name, $age);
		$this->height = $height;
		$this->weight = $weight;
	}
   	public function jump()
	{
		echo '我能跳5米<br />';
	}
	protected function work()
	{
		parent::work();  //重写调用父类的work方法
		echo '我又谈了一个女朋友<br />';
	}
}

$ming = new Son('小牛', 20, 176, 188);
//$ming->work();

/*
$fa = new Father();
$fa->jump();

$ming = new Son();
$ming->jump();*/

/*
重写中的方法权限修改
public ======>  public 
protected =======> protected public 
重写的时候权限只能放大不能缩小*/