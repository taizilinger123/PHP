<?php

wather('meinv.jpg');
function wather($source, $water = 'icon.png', $position = 9, $alpha = 100, $type="jpeg", $path = 'test', $isRandName = true)
{
  //打开图片
  $sourceRes = open($source);
  $waterRes = open($water);  
  
  //获取图片大小 算出来位置
  $sourceInfo = getimagesize($source);
  //var_dump($sourceInfo);
  $waterInfo = getimagesize($water);
  
  //算位置
  switch($position){
       case 1:
	       $x = 0;
		   $y = 0;
           break;
       case 2:
	       $x = ($sourceInfo[0] - $waterInfo[0])/2;
		   $y = 0;
           break;
       case 3:
	       $x = $sourceInfo[0] - $waterInfo[0];
		   $y = 0;
           break;
       case 4:
	       $x = 0;
		   $y = ($sourceInfo[1] - $waterInfo[1])/2;
           break;
       case 5:
	       $x = ($sourceInfo[0] - $waterInfo[0])/2;
		   $y = ($sourceInfo[1] - $waterInfo[1])/2;
           break;
       case 6:
	       $x = $sourceInfo[0] - $waterInfo[0];
		   $y = ($sourceInfo[1] - $waterInfo[1])/2;
           break;
       case 7:
	       $x = 0;
		   $y = $sourceInfo[1] - $waterInfo[1];
           break;
       case 8:
	       $x = ($sourceInfo[0] - $waterInfo[0])/2;
		   $y = $sourceInfo[1] - $waterInfo[1];
           break;
       case 9:
	       $x = $sourceInfo[0] - $waterInfo[0];
		   $y = $sourceInfo[1] - $waterInfo[1];
           break;	
       default:
           $x = mt_rand(0, $sourceInfo[0] - $waterInfo[0]);	
           $y = mt_rand(0, $sourceInfo[1] - $waterInfo[1]);
           break;		   
  }
  //把x,y求出来的值供两张图片合并的时候使用
  imagecopymerge($sourceRes, $waterRes, $x, $y, 0, 0, $waterInfo[0], $waterInfo[1], $alpha);
  
  $func = 'image'.$type;
  /*
  imagepng();
  imagejpeg();
  imagewbmp();
  */
  //处理path路径 是否启用随机文件名
  if($isRandName){
	  $name = uniqid().'.'.$type;
  }else{
	  $pathinfo = pathinfo($source);
	  //var_dump($pathinfo);
	  $name = $pathInfo['filename'].'.'.$type;
  }
  $path = rtrim($path,'/').'/'.$name;
  $func($sourceRes, $path);
  imagedestroy($sourceRes);
  imagedestroy($waterRes);
}

//打开图片的函数

function open($path)
{
	//判断是否存在
	if(!file_exists($path)){
         exit('文件不存在');		
	}
	$info = getimagesize($path);
	
	//var_dump($info);
	
	switch($info['mime']){
         case 'image/jpeg';
         case 'image/jpg';
         case 'image/pjpeg';
		      $res = imagecreatefromjpeg($path);
			  break;
         case 'image/png';
		      $res = imagecreatefrompng($path);
			  break;
         case 'image/gif';
		      $res = imagecreatefromgif($path);
			  break;
         case 'image/wbmp';
         case 'image/bmp';
		      $res = imagecreatefromwbmp($path);
			  break;     		 
	}
	return $res;
} 