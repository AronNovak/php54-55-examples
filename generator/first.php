<?php

function generator($a) {
  for ($i = 0; $i < $a; $i++) {
    yield rand(0, $i);
  }
}

foreach (generator(15) as $val) {
  print $val . "\n";
}
