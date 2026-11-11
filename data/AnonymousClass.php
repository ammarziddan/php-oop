<?php

interface HelloWorld {
  function sayHello(): void;
}

$helloWorld = new class("Anonymous Class") implements HelloWorld {
  public string $name;

  public function __construct(string $name) 
  {
    $this->name = $name;
  }

  function sayHello(): void
  {
    echo "Hello $this->name" . "<br>";
  }

};

$helloWorld->sayHello();
