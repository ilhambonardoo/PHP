<?php
function increment(){
    static $counter = 1; //static scope
    echo "counter = $counter".PHP_EOL;
    $counter ++;
}

increment();
increment();
increment();
increment();