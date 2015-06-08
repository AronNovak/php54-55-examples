<?php

$logo = 'http://download.gna.org/libre-nord/comm/Tux/tux_npdc.png';
$im = imagecreatefrompng($logo);
$modes = array(
  IMG_FLIP_HORIZONTAL,
  IMG_FLIP_VERTICAL,
  IMG_FLIP_BOTH,
);
imageflip($im, $modes[array_rand($modes)]);
$temp = tempnam(sys_get_temp_dir(), 'gd');
imagepng($im, $temp);
imagedestroy($im);
system("display $temp");
unlink($temp);
