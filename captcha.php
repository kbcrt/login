<?php
session_start();
header('Content-type: image/png');

$code = mt_rand(1000, 9999);
$_SESSION['code'] = $code;

$image = imagecreatetruecolor(70, 30);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 70, 30, $bg_color);
imagestring($image, 5, 10, 8, $code, $text_color);
imagepng($image);
imagedestroy($image);
?>
