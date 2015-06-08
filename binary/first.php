<?php
$a = 0b1000000000;

$a *= 0b1000001;

print $a;
print "\n";

print serialize($a);
