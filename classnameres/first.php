<?php

namespace First\Example;

class A {};

class B extends A {};

trait C {};

print A::class . "\n";
print B::class . "\n";
print C::class . "\n";
print notExisting::class . '<WTF?' . "\n";
print \stdClass::class;

$a = new B();
