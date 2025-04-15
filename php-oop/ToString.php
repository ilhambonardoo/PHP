<?php

require_once "data/Student.php";


$student1 = new Student();
$student1->id = "J0404231063";
$student1->name = "Ilham Bonardo Marpaung";
$student1->value = 12;

$string = (string) $student1;
echo $string . PHP_EOL;

// atau bisa seperti ini 
echo $string . PHP_EOL;
