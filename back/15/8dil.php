<?php

//轮胎类==》汽车类
class LunTai
{
	function roll()
	{
		echo '轮胎在滚动<br />';
	}
}

class BMW 
{
	function run()
	{
		$luntai = new LunTai();
		$luntai->roll();
		echo '开着宝马吃烤串<br />';
	}
}

$bmw = new BMW();
$bmw->run();