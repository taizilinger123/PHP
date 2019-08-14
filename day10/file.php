<?php

$fp = fopen('c.txt', 'a+');

//var_dump($fp);

$str = 'abcdefg';

fwrite($fp, $str);
fseek($fp, 0);
echo fread($fp, 3);

fclose($fp);