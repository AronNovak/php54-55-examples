<?php

$logo = 'http://download.gna.org/libre-nord/comm/Tux/tux_npdc.png';
$im = imagecreatefrompng($logo);
$temp = tempnam(sys_get_temp_dir(), 'gd');
print(serialize(imagewebp($im, $temp)));
imagedestroy($im);
system("display $temp\n");
