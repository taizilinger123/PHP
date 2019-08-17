<?php 

include 'config.php';
include 'tpl.func.php';
$title = '这是标题';
$content = '这是test.html内容部分';
$footer = '这是脚部';
display('test.html', compact('title','content','footer'));