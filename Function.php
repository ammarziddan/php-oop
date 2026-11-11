<?php

require_once "data/Person.php";

$ammar = new Person("Ammar", "Jakarta");
$ammar->name = "Ammar";

$ziddan = new Person("Ziddan", null);
$ziddan->name = "Ziddan";

$ammar->sayHello("Ziddan");
$ziddan->sayHello(null);

$ziddan->info();
$ammar->info();
