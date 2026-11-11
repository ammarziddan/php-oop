<?php

class Zero {
  private array $properties = [];

  public function __get($name): mixed
  {
    return $this->properties[$name];
  }

  public function __set($name, $value): void
  {
    $this->properties[$name] = $value;
  }

  public function __isset($name): bool
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name): void
  {
    unset($this->properties[$name]);
  }

  public function __call($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call function $name with arguments $join" . "<br>";
  }
  public static function __callStatic($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call static function $name with arguments $join" . "<br>";
  }
}

$zero = new Zero();
/* echo $zero->firstName . "<br>"; */
/**/
/* $zero->firstName = "Ammar"; */
/* isset($zero->firstName); */
/* unset($zero->firstName); */

$zero->firstName = "Ammar";
$zero->lastName = "Ziddan";

echo "First Name : $zero->firstName <br>";
echo "Last Name : $zero->lastName <br>";

$zero->sayHello("Ammar", "Ziddan", "Nurrahman");
$zero::sayHello("Ammar", "Ziddan", "Nurrahman");
