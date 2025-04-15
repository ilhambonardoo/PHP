<?php

namespace Data\Traits;

trait sayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello Guys" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
    /* 
        Trait bisa menambahkan properties
        Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang ada di trait.
    */
}

trait CanRun
{
    public abstract function run(): void; /* Trait abstract function */
}


class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good Bye in PERSON" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in PERSON" . PHP_EOL;
    }

    // Parent class yang teroverride oleh trait
}

trait All
{
    use sayGoodBye, sayHello, HasName, CanRun {
        // bisa mengoverride visibility
        // goodBye as private;
        // hello as private;
    }
}

class Person extends ParentPerson
{

    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    // public function goodBye(?string $name): void
    // {
    //     echo "Good Bye in PERSON" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in PERSON" . PHP_EOL;
    // } -> ini childclass yang mengoverride si trait

    /* 
        ***Trait overriding urutannya misal***
        ParentClass => akan teroveride oleh => Trait
        Trait => akan teroveride oleh => childClass
    */
}
