<?php

trait MyFirstTrait {

  var $b;

  function firstTraitMethod(&$a) {
    $this->b = "ezaz";
    print $a;
    $a++;
    return TRUE;
  }

}

trait MySecondTrait {

  function second() {
    print "sec";
  }

  function firstTraitMethod() {
    print "ah";
  }

  abstract public function a();

}

class AnExampleClass {
  use MyFirstTrait, MySecondTrait {
    MySecondTrait::firstTraitMethod insteadof MyFirstTrait;
  }

  function __construct() {
    $a = 1;
    print serialize($this->firstTraitMethod($a));
    print $a;
    print $this->b;
  }

}

$a = new AnExampleClass();
$a->a();
$a->second();
