<?php

class Data implements IteratorAggregate
{
    var string $First = "First";
    public string $Second = "Second";
    protected string $Third = "Third";
    private string $Forth = "Forth";

    /* //ITERATOR
    public function getIterator(): Traversable
    {
        $array = [
            "First" => $this->First,
            "Second" => $this->Second,
            "Third" => $this->Third,
            "Forth" => $this->Forth
        ];

        return new ArrayIterator($array);
    }
    */


    // GENERATOR
    public function getIterator(): Traversable
    {
        yield "First" => $this->First;
        yield "Second" => $this->Second;
        yield "Third" => $this->Third;
        yield "Forth" => $this->Forth;
    }
}


$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
