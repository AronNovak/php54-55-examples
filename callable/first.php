<?php

function err($errno, $errstr, $errfile, $errline) {
  if (E_RECOVERABLE_ERROR === $errno) {
    echo "'catched' catchable fatal error\n";
    return true;
  }
  return false;
}

set_error_handler('err');

function my(callable $a) {
  call_user_func($a);
}

my(function() {
  print __FUNCTION__ . "\n";
});

my('a');
