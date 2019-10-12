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
	protected $luntai;
    //注入方式
    function __construct($luntai)
    { 
       $this->luntai = $luntai;
    }

	function run()
	{
		$this->luntai->roll();
		echo '开着宝马吃烤串<br />';
	}
}

$luntai = new LunTai();
$bmw = new BMW($luntai);
$bmw->run();