<?php

require_once "data/Person.php";

$person = new Person("Ziddan", null);
$person->name = "Ziddan";
$person->address = null; // try nullable properties
/* $person->country = "Indonesia"; // use default value */

echo $person->name . "<br>";
echo $person->address . "<br>";
echo $person->country . "<br>";

// error
/* $person2 = new Person(); */
/* $person2->name = []; */
/* $person2->address = 1; */
/* $person2->country = 0.2; */
