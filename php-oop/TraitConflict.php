<?php

trait A
{
    public function doA()
    {
        echo "a" . PHP_EOL;
    }

    public function doB()
    {
        echo "b" . PHP_EOL;
    }
}


trait B
{
    public function doA()
    {
        echo "A" . PHP_EOL;
    }

    public function doB()
    {
        echo "B" . PHP_EOL;
    }
}

class Sample
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$contoh = new Sample();
$contoh->doA();
$contoh->doB();
