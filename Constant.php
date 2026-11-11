<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APPLICATION . "<br>";
echo APP_VERSION . "<br>";

// access class constant
echo Person::AUTHOR . "<br>";
