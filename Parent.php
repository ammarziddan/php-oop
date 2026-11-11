<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . "<br>";

$rectangle = new Rectangle();
echo $rectangle->getCorner() . "<br>";
echo $rectangle->getParentCorner() . "<br>";

