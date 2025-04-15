<?php

class Manager 
{
    var string  $name;

    var string $title;

    function sayHello(string $name) : void
    {
        echo "Hi $name, My name is Manager $this->name". PHP_EOL;
    } /* Ini adalah function overrinding yang artinya bisa menimpa function sebelumnya. */

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    } /* Ini merupakan construct overriding */
}


class VicePresident extends Manager
{
    
    function sayHello(string $name) : void
    {
        echo "Hi $name, My name is VP $this->name". PHP_EOL;
    }
    /* Ini adalah function overrinding yang artinya bisa menimpa function sebelumnya. */

    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    } /* Ini merupakan construct overriding */
}