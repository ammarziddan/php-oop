<?php

namespace Data\Traits;

use Override;

trait SayGoodbye {

  function goodBye(?string $name): void
  {

    if (!is_null($name)) {
      echo "Good bye $name." . "<br>";
    } else {
      echo "Good bye." . "<br>";
    }

  }

}

trait SayHello {

  function hello(?string $name): void
  {

    if (!is_null($name)) {
      echo "Hello $name." . "<br>";
    } else {
      echo "Hello." . "<br>";
    }

  }

}

trait HasName {
  public string $name;
}

trait CanRun {
  public abstract function run():void;
}

trait All {
  use SayGoodbye, SayHello, HasName, CanRun;
}

class ParentPerson {
  public function goodBye(?string $name): void
  {
    echo "Good bye in Person" . "<br>";
  }

  public function hello(?string $name): void
  {
    echo "Hello in Person" . "<br>";
  }
}

class Person {
  /* use All; */

  use SayGoodbye, SayHello, HasName, CanRun {
    // visibility override  
    /* hello as private; */
    /* goodBye as private; */
  }

  public function run(): void
  {
    echo "Person $this->name is running" . "<br>";
  }
}
