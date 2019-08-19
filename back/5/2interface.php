<?php

/*
abstract class Test 
{
	abstract function  test1();
	abstract function  test2();
}*/
interface Test 
{
	function demo();
}

interface Eat extends Test
{
	function eatMianbao();  //接口里的方法都是抽象方法，子类必须实现抽象方法,不写修饰符默认是public
}

interface Jump
{
	function jumpp();
}

class Animal
{

}

class Person extends Animal implements Eat, Jump
{
	function eatMianbao()
	{
		echo '我在吃面包';
	}

	function demo()
	{
		
	}

	function jumpp()
	{
		echo '我会跳';
	}

}

