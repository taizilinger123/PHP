<?php

//var_dump($_FILES['abc']);
//判断是否有错误号

var_dump($_FILES);

if($_FILES['file']['error']){
	   switch($_FILES['file']['error']){
           case 1:
              $str = '上传的文件超过了php.ini中upload_max_filesize选项限制的值';
              break;
           case 2:
              $str = '上传文件的大小超过了HTML表单中MAX_FILE_SIZE选项指定的值';
              break;
           case 3:
              $str = '文件只有部分被上传';
              break;
           case 4:
              $str = '没有文件被上传';
              break;
           case 6:
              $str = '找不到临时文件夹';
              break;
           case 7:
              $str = '文件写入失败';
              break;      			  
	   }
	   echo $str;
	   exit;
}

//判断你准许的文件的大小
if($_FILES['file']['size']>(pow(1024, 2)* 2)){
	exit('文件大小超过了准许的大小');
}
//判断你准许的mime类型  文件后缀

$allowMime = ['image/png','image/jpeg','image/gif','image/wbmp','image/jpg'];
$allowSubFix = ['png','jpeg','gif','wbmp','jpg'];

$info = pathinfo($_FILES['file']['name']);
$subFix = $info['extension'];

if(!in_array($subFix, $allowSubFix)){
	exit('不准许的文件后缀');
}

if(!in_array($_FILES['file']['type'], $allowMime)){
	exit('不准许的mime类型');
}
//拼接上传路径
$path = 'upload/';

if(!file_exists($path)){
     mkdir($path);	
}
//文件名随机
$name = uniqid(). '.' . $subFix;

//判断是否是上传文件
if(is_uploaded_file($_FILES['file']['tmp_name'])){
	  if(move_uploaded_file($_FILES['file']['tmp_name'],$path.$name)){
          echo '上传成功';		  
	  }else{
		  echo '文件移动失败';
	  }
}else{
	echo '不是上传文件';
	exit;
}














