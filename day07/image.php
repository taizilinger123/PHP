<?php

//1、创建画布
$image = imagecreatetruecolor(600, 600);

//2、创建颜色
$red = imagecolorallocate($image, 255, 0, 0); //0 - 255

$green = imagecolorallocate($image, 0, 255, 0); 

$blue = imagecolorallocate($image, 0, 0, 255); 

//3、用GD库给咱们的函数去画画
imageline($image, 0, 0, 600, 600, $red);
imagefilledrectangle($image, 10, 10, 40, 40, $green);
imageellipse($image, 50, 50, 100, 100, $blue);

//4、告诉浏览器你的mime类型
header("Content-type:image/png");

//5、输出到浏览器或者可以存放到你的本地
imagepng($image);

//6、销毁资源
imagedestroy($image);
