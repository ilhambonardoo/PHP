<?php

require_once "data/Student.php";


$student1 = new Student();
$student1->id = "J0404231063";
$student1->name = "Ilham Bonardo Marpaung";
$student1->value = 12;
$student1->setSample("Bonardo");


var_dump($student1);
