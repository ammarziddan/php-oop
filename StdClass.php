<?php

$array = [
  "firstName" => "Ammar",
  "lastName" => "Ziddan",
  "age" => 24,
];

$object = (object)$array;

var_dump($object);

echo "<br>";

echo "First Name : $object->firstName" . "<br>";
echo "Last Name : $object->lastName" . "<br>";
echo "Age : $object->age" . "<br>";

$arrayLagi = (array)$object;
var_dump($arrayLagi);
