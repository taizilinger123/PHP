<?php

include '2namespace.php';
use \hello\Person as Person1;
use \world\test\Person as Person2;

$ming = new Person2();
$ming->eat();

$niu = new \hello\Person();
$niu->eat();