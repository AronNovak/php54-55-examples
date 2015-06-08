<?php

namespace First\Example;

class OwnIter implements \Iterator {

  private $max;

  private $curr;

  function __construct() {
    $this->max = rand(10, 50); 
    $this->curr = 0;
    print __CLASS__;
  }

  function current() {
    return "a";
  }

  function key() {
    return function() {
      return rand(25, 500);
    };
  }

  function next() {
    $this->curr++;
  }

  function rewind() {
    $this->curr = 0;
  }

  function valid() {
    return $this->curr < $this->max;
  }
}

$a = new OwnIter();

foreach ($a as $x => $y) {
  if (is_callable($x)) {
    print call_user_func($x) . " => ";
    print $y . "\n";
  }
  else {
    print "err\n";
  }
}

print __LINE__;
