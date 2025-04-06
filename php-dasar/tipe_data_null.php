<?php

$name = "Ilham ";
$name = null;

$age = null;


echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age ; 
echo "\n";

// Mengecek null
echo "Is Name Null? ";
var_dump(is_null($name));
echo "\n";

// Menghapus Variabel
$contoh = "Bonardo";
unset($contoh);

echo $contoh;

// Mengecek NULL dengan jelas
var_dump(isset($contoh));