<?php
function foo(){
    echo "FOO" .PHP_EOL;
}

function barr(){
    echo "BARR" . PHP_EOL;
}

$functionDipanggil = "foo";
$functionDipanggil();

$functionDipanggil = "barr";
$functionDipanggil();

// =================================== //

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
};

function sampleFunction(string $name):string {
    return "Sample $name";
};

sayHello("Ilham","sampleFunction");
sayHello("Ilham","strtoupper");
sayHello("Ilham","strtolower");

?>