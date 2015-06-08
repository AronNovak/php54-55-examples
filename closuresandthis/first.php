<?php

class A {

  private $a = 'c';
  function __construct() {
    call_user_func(function() {
      print $this->a;
    });
  }
}
new A();
