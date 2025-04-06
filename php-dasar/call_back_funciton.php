<?php
function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName". PHP_EOL;
}
sayHello("Ilham", "strtoupper");
sayHello("Ilham", "strtolower");
sayHello("Ilham Bonardo Marpaung", function(string $name):string{
    return strtoupper($name);
});
sayHello("Bonardo", fn($name) => strtoupper($name));

?>