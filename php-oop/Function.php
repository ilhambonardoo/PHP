<?php

require_once "data/Person.php";

$ilham = new Person("Ilham", "Bogor");
$ilham->name = "Ghina";
$ilham->sayHello("Ilham");

$ghina = new Person("Ghina", null);
$ghina->name = "Ghina";
$ghina->sayHello(null);

$ilham -> info();
$ghina -> info();