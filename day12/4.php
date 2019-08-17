<?php

$str = 'aaaaaabcde';

$pattern = '/a/';

preg_match_all($pattern, $str, $matchs);

var_dump($matchs);