<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand, isMaintenance
{
    function drive(): void;

    function getTire(): void;
}

class Avanza implements Car{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): void
    {
        echo 1;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}