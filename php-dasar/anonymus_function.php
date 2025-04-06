<?php
$sayHello = function (string $name){
    echo "hello $name ". PHP_EOL;
};

$sayHello ('Ilham');
$sayHello('Bonardo');

function goodBye (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName".PHP_EOL;
}

// Anonymus Function
goodBye('Ilham', function(string $name):string {
    return strtoupper($name);
});

// Variabel function
$filterFunction = function (string $name): string{
    return strtoupper($name);
};
goodBye("Ilham", $filterFunction);

// mengakses variabel luar
$firstName = "Ilham";
$lastName = "Bonardo";

$sayHello = function () use($firstName, $lastName){
    echo "Hello $firstName $lastName";
};

$sayHello();
?>
