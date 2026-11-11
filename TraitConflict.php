<?php

trait A {
  function foo(): void 
  {
    echo "FOO" . "<br>";
  }

  function bar(): void 
  {
    echo "BAR" . "<br>";
  }
}

trait B {
  function foo(): void 
  {
    echo "foo" . "<br>";
  }

  function bar(): void 
  {
    echo "bar" . "<br>";
  }
}

class Sample {
  use A, B {
    A::foo insteadof B;
    B::bar insteadof A;
  }
}

$sample = new Sample();
$sample->foo();
$sample->bar();
