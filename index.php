<?php


$beforeImageCompression = 'img/v-tree.png';
$afterImageCompression = 'webp/v-tree80.webp';


//$image = imagecreatefromjpeg($beforeImageCompression);
$image = imagecreatefrompng($beforeImageCompression);
imagepalettetotruecolor($image);
imagealphablending($image, true);
imagesavealpha($image, true);
imagewebp($image, $afterImageCompression, 80);
imagedestroy($image);