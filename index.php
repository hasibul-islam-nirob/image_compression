<?php


$beforeImageCompression = 'img/burger.jpg';
$afterImageCompression = 'webp/burger.webp';



$image = imagecreatefromjpeg($beforeImageCompression);
imagepalettetotruecolor($image);
imagealphablending($image, true);
imagesavealpha($image, true);
imagewebp($image, $afterImageCompression, 50);

imagedestroy($image);