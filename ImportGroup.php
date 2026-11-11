<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use Data\Two\Conflict as Conflict2;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

$dummy = new Dummy();
$sample = new Sample();
