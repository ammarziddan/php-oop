<?php

require_once "data/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . "<br>";

$result = MathHelper::sum(10,10,10);

echo $result . "<br>";
