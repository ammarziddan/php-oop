<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{Person};

$person = new Person();
$person->hello("Michelle");
$person->goodBye(null);

$person->name = "Michelle";

var_dump($person);
echo "<br>";

$person->run();
