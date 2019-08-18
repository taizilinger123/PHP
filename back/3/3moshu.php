<?php 

class Person 
{
	public $name;
	public $age;
	public $height;

    public function __toString()
    {
    	return '我爱你中国';
    }

    public function __debugInfo()
    {
    	return ['age' => $this->age, 'height' => $this->height];
    }

    public function test()
    {
    	echo '这是test方法';
    }

    public function __call($name, $value)
    {
    	var_dump($name, $value);
    }
}

$niu = new Person();

$niu->demo(1, 2, 3);

//var_dump($niu);

//echo $niu;