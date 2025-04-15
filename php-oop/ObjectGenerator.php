<?php

// Membandingakan object iterator dan generator

// Object ITERATOR 

function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++)
        if ($i % 2 == 0) {
            $array[] = $i;
        }

    return new ArrayIterator($array);
}

foreach (getGenap(100) as $value) {
    echo "Bilangan Genap : $value" . PHP_EOL;
}

// Object GENERATOR --> lebih disarankan karena ini lebih sederhana dari pada iterator

function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++)
        if ($i % 2 == 1) {
            yield $i;
        }
}

foreach (getGanjil(100) as $value) {
    echo "Bilangan Ganjil : $value" . PHP_EOL;
}
