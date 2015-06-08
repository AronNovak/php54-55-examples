<?php
function a() {
  return ['a', 'b', 'c' => 'd'];
}

$b = [1, 2, 3];
var_export($b);

print a()['c'];

