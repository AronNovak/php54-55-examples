<?php

class A {

  function ab() {
    print "eh";
  }
  
  static function ba() {
    print "eh";
  }

}

$a = 'a';

$b = new A();

$b->{$a . 'b'}();

A::{'b' . $a}();
