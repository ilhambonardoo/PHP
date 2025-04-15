<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new \Data\CatShelter;
$cat = $catShelter->adopt("AYAY"); //convariance
$cat->eat(new \Data\AnimalFood()); //contravariance

$dogShelter = new \Data\DogShelter;
$dog = $dogShelter->adopt("doggy"); //convariance
$dog->eat(new \Data\food()); //contravariance
