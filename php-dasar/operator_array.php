<?php

// Operator Array
// $a + $b --> union --> menggabungkan array $a dan $b
// $a == $b --> Equality --> true jika $a dan $b memiliki key-value sama
// $a === $b --> Identity --> true jika $a dan $b memiliki key-value sama dan posisi sama
// $a != $b --> Inequality --> true jika $a dan $b tidak sama
// $a <> $b --> Inequality --> true jika $a dan $b tidak sama
// $a !== $b --> Nonidentity --> true jika $a dan $b tidak identik

$first = [
    "first_name"  => "Ilham"
];

$last = [
    "last_name" => "Bonardo"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name"  => "Ilham",
    "last_name" => "Bonardo"
];

$b = [
    "last_name" => "Bonardo",
    "first_name"  => "Ilham"
];

$equality = $a == $b;
var_dump($equality);

$identity = $a === $b;
var_dump($identity);

$inequality = $a != $b;
var_dump($inequality);

$nonidentity = $a != $b;
var_dump($nonidentity);