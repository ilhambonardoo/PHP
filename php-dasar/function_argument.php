<?php

// function sayHello($name, $lastname){
//     echo "Hello $name $lastname".PHP_EOL;
// }
// sayHello("Ilham", "Bonardo");



// Default Argument Value
function sayHello($name = "Anonymous"){
    echo "Hello $name".PHP_EOL;
};
sayHello("Ilham");
sayHello();

// Tipe deklarasi
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total".PHP_EOL;
};

sum(100,100);
sum("100","100");
sum(true,false);


// Variable-length argument list
function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total ". implode(",", $values). " = $total". PHP_EOL;
}
sumAll(1, 2, 3, 4, 5);
?>