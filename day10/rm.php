<?php

rm('test');
function rm($path)
{
	//打开目录
	$dir = opendir($path);
	
	//跳过两特殊的目录结构 .  ..
	readdir($dir);
	readdir($dir);
	
	//循环删除
	while($newFile = readdir($dir)){
        //判断是否是文件还是文件夹
        //test /a/ b/c 
        $newPath = $path . '/' . $newFile;
        
        if(is_file($newPath)){
			 unlink($newPath);
		}else{
			 rm($newPath);
		}		
	}
	
	closedir($dir);
	rmdir($path);
}