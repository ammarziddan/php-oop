<?php

namespace Data;

interface HasBrand {
  function getBrand(): string;
}

interface IsMaintenance {
  function IsMaintenance(): bool;
}

interface Car extends HasBrand {
  function drive(): void;

  function getTire(): int;
}

class Avanza implements Car, IsMaintenance {
  private string $brand = "Toyota";

  public function getBrand(): string
  {
    return $this->brand;
  }

  public function drive(): void
  {
    echo "Drive Avanza" . "<br>";
  }

  public function getTire(): int
  {
    return 4;
  }

  public function IsMaintenance(): bool
  {
    return false;
  }
}
