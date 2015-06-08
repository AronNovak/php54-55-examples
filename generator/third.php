<?php

function badgenerator($a) {
  print __FUNCTION__ . "\n";
  for ($i = 0; $i < $a; $i++) {
    yield &$i;
  }
}

function &goodgenerator($a) {
  print __FUNCTION__ . "\n";
  for ($i = 0; $i < $a; $i++) {
    yield $i;
  }
}

foreach (badgenerator(3) as $val) {
  print serialize($val) . "\n";
}

foreach (goodgenerator(8) as $val) {
  print serialize($val) . "\n";
  $val++;
}

foreach (goodgenerator(10) as &$val) {
  print serialize($val) . "\n";
  $val++;
}
