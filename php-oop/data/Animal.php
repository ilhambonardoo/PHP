<?php

/*
Saat membuat class yang abstract, kita bisa membuat abstract funtion di dalam class abstract.
Saat kita membaut abstract funtion itu tidak boleh membuat block function.
Abstract function wajib di override di class child.
Jika ingin memaksa dimana classnya harus mengoveride sebuah funcion itu bisa menggunakan Abstract function.
Abstract funtion tidak boleh memiliki access modifier private.
*/


namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    abstract public function run();

    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo " Cat $this->name is runnng" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is runnng" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}
