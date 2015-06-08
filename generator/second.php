<?php

function generator1($a) {
  for ($i = 0; $i < $a; $i++) {
    yield rand(0, $i);
  }
}

function generator2($a) {
  for ($i = 0; $i < $a; $i++) {
    yield (function($a) { print 'a' . ($a * rand(0, 10)); }) => (rand(0, $i));
  }
}

foreach (generator1(15) as $key => $val) {
  print serialize($key) . ' => ' . serialize($val) . "\n";
}

foreach (generator2(15) as $key => $val) {
  call_user_func($key, $val);
  print ' => ' . serialize($val) . "\n";
}
