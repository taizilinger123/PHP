<?php
trait Test 
{
    function demo()
    {
    	echo '这是一个测试方法<br />';
    }
}


trait Dun 
{   
	use Test;
	function fangyu()
	{
		echo '我能抵抗100点攻击<br />';
	}

	function attack()
	{
		echo '我能增加10点攻击<br />';
	}
}

trait Sword 
{
	function attack()
	{
		echo '我会增加50点伤害<br />';
	}
}

//$d = new Dun(); //不能实例化trait
class Hero
{
    use Dun, Sword{
    	Dun::attack  insteadof Sword; //在相同的attack方法中，使用Dun的attack
    	Sword::attack as Sattack;  //在相同的attack方法中，给Sword里的attack起别名
    }
}

$gailun = new Hero();
// $gailun->fangyu();
// $gailun->demo();
$gailun->attack();
$gailun->Sattack();