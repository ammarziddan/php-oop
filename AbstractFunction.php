<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Cinot";
$cat->run();

$cat = new Dog();
$cat->name = "Brown";
$cat->run();
