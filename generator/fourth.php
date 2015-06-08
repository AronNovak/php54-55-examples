<?php

$gen = call_user_func(function() {
  while (TRUE) {
    $a = yield;
    print strtoupper($a);
  }
});


$gen->send("ahA");
$gen->send("noA");
print "\n" . get_class($gen) . "\n";
