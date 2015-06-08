<?php

print empty("a") . ':' . __LINE__ . "\n";

print empty(FALSE) . ':' . __LINE__ . "\n";

$a = function() {
  return FALSE;
};
print empty($a()) . ':' . __LINE__ . "\n";

print empty(function() {
  return 1;
}) . ':' . __LINE__ . "\n";

$a = 0;
print empty($a) . ':' . __LINE__ . "\n";

print "\n" . __LINE__;
