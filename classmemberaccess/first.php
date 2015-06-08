<?php

trait WhereIAm {

  function tell() {
    print_r(debug_backtrace());
    print "\n" . __FUNCTION__ . "\n";
  }
}

class A {

  use WhereIAm;

  function __construct() {
    $this->tell();
  }

  function b() {
    $this->tell();
    print "called";
    return $this;
  }

  function c() {
    $this->tell();
    print "CCed";

  }
}

(new A())->b()->c();
