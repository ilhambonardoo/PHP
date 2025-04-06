<?php 

$data = [1,2,3,4,5,6,7,8,9,10];

$data_result = array_map(fn($value) => $value *10, $data);
echo implode(', ', $data_result) .PHP_EOL;

rsort($data);
echo implode (' ',$data).PHP_EOL;

$orang = [
    "first name" => "Ilham",
    "last name" => "Bonardo"
];

var_dump(array_keys($orang));
var_dump(array_values($orang));
