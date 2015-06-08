<?php

$arr = array(
  // On assoc. array, no joy.
  [
    'a' . __LINE__ => 'b',
  ],
  // Works here.
  [
    0, 1, 'b',
  ],
);

print_r($arr);

foreach ($arr as list($a, $b)) {
  print_r($a);
  print serialize($b);
}
