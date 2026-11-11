<?php

$date = new DateTime();
$date->setDate(2001, 12, 29);
$date->setTime(8, 59, 0.0);

// add one week
$date->add(new DateInterval("P1W"));

$minusOneYear = new DateInterval("P1Y");
$minusOneYear->invert = true;

$date->add($minusOneYear);

/* var_dump($date); */

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));

/* var_dump($now); */

/* echo $now->format("d M Y - H:i:s"); */

$dateFromUser = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($dateFromUser);
