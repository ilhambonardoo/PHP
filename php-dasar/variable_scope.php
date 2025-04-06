<?php

// Global Scope

$name = "Ilham";

function sayHello(){
    global $name; // global keyword
    echo $name.PHP_EOL;
    echo $GLOBALS["name"].PHP_EOL;
};

sayHello();