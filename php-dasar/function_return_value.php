<?php

// function sum(int $first, int $last){
//     $total = $first+$last;
//     return $total;
// }

// $result = sum(10,10);
// echo $result . PHP_EOL;

// function getFinalValue(int $value){
//     if ($value >= 80){
//         return 'A';
//     }if ($value >= 60){
//         return 'B';
//     }if ($value >= 50){
//         return 'C';
//     }if ($value >= 40){
//         return 'D';
//     }else{
//         return 'E';
//     }
// }

// $nilai = getFinalValue(90);
// var_dump($nilai);

// $nilai = getFinalValue(20);
// var_dump($nilai);

// return type declarations
function sum(int $first, int $last):int
{
    $total = $first+$last;
    return $total;
}

$result = sum(10,10);
var_dump($result) . PHP_EOL;

function getFinalValue(int $value):string
{
    if ($value >= 80){
        return 'A';
    }if ($value >= 60){
        return 'B';
    }if ($value >= 50){
        return 'C';
    }if ($value >= 40){
        return 'D';
    }else{
        return '1';
    }
}

$nilai = getFinalValue(90);
var_dump($nilai);

$nilai = getFinalValue(20);
var_dump($nilai);
?>