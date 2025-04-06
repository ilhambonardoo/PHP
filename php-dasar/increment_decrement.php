<?php
// $a++ --> Post increment --> Kembalikan $a lalu naikkan 1 angka
// ++$a --> Pre increment -->  Naikkan 1 angka lalu Kembalikan $a 
// $a-- --> Post increment --> Kembalikan $a lalu turunkan 1 angka
// --$a --> Pre increment -->  Naikkan 1 angka lalu kembalikan $a

// $a = 10; 
// $b = $a++;

// mirip kaya 

// $b = $a;
// $a = $a +1;


// $a = 10; 
// $b = ++$a;

// mirip kaya 

// $a = $a +1;
// $b = $a;


$a = 10; 
$b = ++$a;
$c = $a++;

var_dump($b);
var_dump($c);