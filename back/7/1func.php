<?php 

function test($a)
{
	echo '今天天气不错'.$a.'<br />';
}

//test();

//call_user_func('test', '真心不错');
//call_user_func_array('test', ['假话']);

class Dog
{
	function wang()
	{
		echo '汪汪<br />';
	}

	function rock()
	{
		// $this->wang();
		call_user_func([$this, 'wang']);
		echo '摇尾巴<br />';
	}
}

$dog = new Dog();
$dog->rock();
//call_user_func([$dog, 'wang']);