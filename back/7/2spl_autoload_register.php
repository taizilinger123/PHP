<?php

function myAutoload($className)
{
	echo $className;
	//通过类名找到文件名，然后导入进来即可
}

spl_autoload_register('myAutoload');

$dog = new Dog();