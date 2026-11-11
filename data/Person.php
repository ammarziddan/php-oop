<?php

class Person
{
  // constant
  const AUTHOR = "Admin";

  // Properties
  var string $name;
  var ?string $address; // nullable type
  var string $country = "Indonesia"; // default values

  // constructor
  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  // Method
  function sayHello(?string $name) {
    if (is_null($name)) {
      echo "Hi, my name is $this->name" . "<br>";
    } else {
      echo "Hello $name, my name is $this->name" . "<br>";
    }
  }

  // self keyword
  function info() {
    echo "Author : " . self::AUTHOR . "<br>"; // self: access current class value
  }

  // destructor: usually for closing connection from database or writing to file to prevent memory leak
  function __destruct()
  {
    echo "Object person $this->name is destroyed" . "<br>";
  }
}
