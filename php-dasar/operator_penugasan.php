<?php

// $a += $b  ----> $a = $a+b
// $a -= $b  ----> $a = $a-b
// $a *= $b  ----> $a = $a*b
// $a /= $b  ----> $a = $a/b
// $a %= $b  ----> $a = $a%b

$total = 0;

$fruit = 5000;
$chicken = 20000;
$orangeJuice = 5000;

$total+=$fruit;
$total+=$chicken;
$total+=$orangeJuice;

var_dump($total);
