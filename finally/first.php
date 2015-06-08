<?php

try {
  $a = new stdClass();
}
catch (Exception $e) {
  print "err";
}
finally {
  print "whatever" . __LINE__;
}

try {
  $a = new stdClass();
  throw new Exception('a');
}
catch (Exception $e) {
  print "err";
}
finally {
  print "whatever" . __LINE__;
}
