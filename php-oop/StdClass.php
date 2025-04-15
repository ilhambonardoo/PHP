<?php

$array = [
    "FirstName" => "Ilham",
    "MiddleName" => "Bonardo",
    "LastName" => "Marpaung"
];


$object = (object) $array;
var_dump($object);


$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$Person = new Person("Ilham", "Bogor");
var_dump($Person);

$arrayPerson = (array) $Person;
var_dump($arrayPerson);
