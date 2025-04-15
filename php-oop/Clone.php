<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "J0404231063";
$student1->name = "Ilham Bonardo Marpaung";
$student1->value = 12;
$student1->setSample("xxxxxx");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);


/*
 
    Alur __Clone 
  $student1 => clone menjadi $student2 => $student2 dipanggil function __clone


 */