<?php

require_once "data/Person.php";

$person = new Person("Ilham", "Bogor");
$person->name = "Ilham";
$person->address = "Bogor";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Ghina", null);
$person2->name = "Ghina";
$person2->address = null;

var_dump($person2);

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;