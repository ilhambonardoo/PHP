<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, sayGoodBye, sayHello};

$person = new Person();
$person->goodBye("null");
$person->hello("Ghina");

$person->name = "Ilham";
var_dump($person);

$person->run();
