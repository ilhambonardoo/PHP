<?php

interface HelloWorld
{
    function sayHello(): void;
}


$hellowWorld = new class("Ilham") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$hellowWorld->sayHello();
