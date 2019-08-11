<?php

$dst = imagecreatefromjpeg('1.jpg');
$src = imagecreatefromjpeg('2.jpg');

imagecopyresampled($dst, $src, 10, 10, 300, 100, 100, 100, 100, 100);

header('Content-type:image/jpeg');
imagejpeg($dst);
imagedestroy($dst);
imagedestroy($src);