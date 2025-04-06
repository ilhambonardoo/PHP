<?php 
// operator data
$name = "Ilham Bonardo Marpaung";

echo "Nama : ". $name . PHP_EOL;
echo "Value : ". 100 . PHP_EOL;
echo PHP_EOL;

// konversi ke Number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)'100';
var_dump($valueInt);

$valueInt = (int)'asdas';
var_dump($valueInt);

$valueFloat = (float)'1.01';
var_dump($valueFloat);

$valueFloat = (float)'asd';
var_dump($valueFloat);

// Mengakses karakter
$name = 'Ilham Bonardo';
echo $name [0]. PHP_EOL;
echo $name [1]. PHP_EOL;
echo $name [2]. PHP_EOL;
echo $name [3]. PHP_EOL;
echo $name [4]. PHP_EOL;
echo $name [5]. PHP_EOL;
echo $name [6]. PHP_EOL;

// Variabel parsing
echo "Hello $name, selamat belajar PHP".PHP_EOL;

// Curly Brace--> Jika kesulitan menambahkan s untuk variabel parsing
$var = "var";
echo "This is {$var}s".PHP_EOL;
