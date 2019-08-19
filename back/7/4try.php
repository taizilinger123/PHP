<?php

class MyException extends Exception  
{
	function demo()
	{
		echo '执行第二套方案<br />';
	}
}

/*
try {
	echo '今天我要去打游戏<br />';
	throw new MyException('突然女朋友打电话');
	echo '我正在打游戏<br />';
} catch (MyException $e) {
	echo $e->getMessage();
	$e->demo();
}*/

try {
	echo '今天我要去打游戏<br />';
	// try {
		
	// } catch (Exception $e) {
		
	// }
	throw new MyException('突然女朋友打电话');
	echo '我正在打游戏<br />';
} catch (MyException $e) {
	echo '111';
	// try {
		
	// } catch (Exception $e) {
		
	// }
} catch (Exception $e) {
	echo '222';
}