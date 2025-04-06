<?php

$values = array (1,10,9,120, 1.5);
var_dump($values);
echo "\n";


$names = ["Ilham", "Bonardo", "Marpaung"];
var_dump($names);
echo "\n";

var_dump($names[0]);
echo "\n";

// Mengubah data dalam array
$names[0] = "BUDI";
var_dump($names);
echo "\n";

// menghapus array
unset($names[1]);
var_dump($names);
echo "\n";

// menambahkan array
$names[] = "DODO";
var_dump($names);
var_dump(count($names));

// MEMBUAT KODE MAP
$ilham = array(
    "id" => "ilham",
    "name" => "Ilham Bonardo",
    "Age" =>20,
    "address" => array(
        "city" => "Bogor",
        "country" => "Indonesia"
    ) 
);
var_dump($ilham);
var_dump($ilham["name"]);
var_dump($ilham["address"]["country"]);
echo "\n";

$budi = [
    "id" => "Budi",
    "name" => "Budiman",
    "Age" => 19,
    "address" =>[
        "city" => "Bogor",
        "country" => "Indonesia"
    ]
];

var_dump($budi);
var_dump($budi["address"]["city"]);
