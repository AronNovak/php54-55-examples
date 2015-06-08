<?php

trait MyFirstTrait {

  var $b;

  function __construct() {
    print "wow";
  }

  function firstTraitMethod(&$a) {
    $this->b = "ezaz";
    print $a;
    $a++;
    return TRUE;
  }

}

class AnExampleClass {
  use MyFirstTrait;

  function __construct() {
    $a = 1;
    print serialize($this->firstTraitMethod($a));
    print $a;
    print $this->b;
  }

  function a() {
    print $this->b;
  }
}

$a = new AnExampleClass();
$a->a();
