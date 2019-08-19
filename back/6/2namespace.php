<?php

namespace hello;
class Person
{
   function eat()
   {
   	  echo '我在吃面包<br />';
   }
}

namespace world\test;
class Person
{
   function eat()
   {
   	  echo '我在吃馒头<br />';
   }
}

/*
$niu = new \hello\Person();
$niu->eat();

$ming = new \world\test\Person();
$ming->eat();*/

/*
$ming = new Person();
$ming->eat();*/