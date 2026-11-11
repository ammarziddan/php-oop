<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as ConflictOne;
use Data\Two\Conflict as ConflictTwo;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new ConflictOne();
$conflict2 = new ConflictTwo();

help();

echo APP . "<br>";
