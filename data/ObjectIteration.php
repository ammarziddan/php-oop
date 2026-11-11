<?php

class Data implements IteratorAggregate {
  var string $first = "First";
  public  string $second = "Second";
  protected string $third = "Third";
  private string $fourth = "Fourth";

  public function getIterator(): Traversable
  {
    /* $array = [ */
    /*   "first" => $this->first, */
    /*   "second" => $this->second, */
    /*   "third" => $this->third, */
    /*   "fourth" => $this->fourth, */
    /* ]; */

    /* return new ArrayIterator($array); */

      yield "first" => $this->first;
      yield "second" => $this->second;
      yield "third" => $this->third;
      yield "fourth" => $this->fourth;
  }
}

$data = new Data();

foreach ($data as $property => $value) {
  echo "Property : $property <br>Value : $value <br>";
}
