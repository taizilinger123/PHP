<?php
//三维数组
$arr = [
    'php' => [
	    'html',
		'js' => [
		    'dom',
			'bom' => [
			    'window'
			],
		    'ecma'
		]
	]
];

var_dump($arr['php']['js']['bom'][0]);