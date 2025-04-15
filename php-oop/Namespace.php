<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

/* 
    Namespace berguna untuk menyimpan class-class kita di dalam namespace
    Namspace bisa nested artinya kita bisa membuat namspace di dalam namespace.
    Namsapace bagus ketika kita mempunyai beberapa nama class yang sama.
*/

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\One\Conflict();

echo Helper\APPLICATION .PHP_EOL;

Helper\helpMe();