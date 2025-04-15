<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Ilham";
$manager->sayHello("Ghina");


$vp = new VicePresident();
$vp->name = "Ghina";
$vp->sayHello("Ilham");