<?php

$logo = 'orig.png';
$im = imagecreatefrompng($logo);
$temp = tempnam(sys_get_temp_dir(), 'gd');
$im = imagecropauto($im, IMG_CROP_WHITE);
imagepng($im, $temp);
imagedestroy($im);
system("display $temp\n");
