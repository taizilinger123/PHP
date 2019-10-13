<?php

//index.php?m=index&a=index
//index.php?m=index&a=demo

class Psr4AutoLoad
{
	function __construct()
	{
		spl_autoload_register([$this, 'autoload']);
	}

	function autoload($className)
	{
        //echo $className;
        //根据类名找到文件全路径并且include进来
        $filePath = str_replace('\\', '/', $className).'.php';
        //echo $filePath;
        include $filePath;
	}
}

$psr = new Psr4AutoLoad();
//得到控制器名字和方法名
$m = $_GET['m'];
//完整的类名就是命名空间名再拼接类名controller\IndexController
$className = 'controller\\'.ucfirst(strtolower($m)).'Controller';
//根据类名创建对象
$obj = new $className();

//得到方法名
$a = $_GET['a'];
//让对象去执行对应的方法即可
call_user_func([$obj, $a]);