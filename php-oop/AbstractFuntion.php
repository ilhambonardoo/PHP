<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Miki";
$cat->run();

$dog = new Dog();
$dog->name = "Lugi";
$dog->run();