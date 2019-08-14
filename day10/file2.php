<?php

//var_dump(pathinfo('a.txt'));

//var_dump(basename('a.txt'));

//var_dump(dirname('test\a.txt'));

$arr = ['username'=>'zhangsan','pass'=>'123'];

//var_dump(http_build_query($arr));

//var_dump(parse_url('http://localhost/day10/file2.php?username=zhangsan&pass=123'));

parse_str('username=zhangsan&pass=123');

//echo $username,$pass;

file_exists();

is_file();

is_dir();

is_writable();

is_readable();

is_executable();

chmod(); //0777   r w x 