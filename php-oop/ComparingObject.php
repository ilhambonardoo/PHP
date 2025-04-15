<?php
require_once "data/Student.php";

$student1 = new Student();
$student1->id = "J0404231063";
$student1->name = "Ilham Bonardo Marpaung";
$student1->value = 12;

$student2 = new Student();
$student2->id = "J0404231063";
$student2->name = "Ilham Bonardo Marpaung";
$student2->value = 12;

var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);
