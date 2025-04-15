<?php 

namespace data;

class Shape 
{
    public function getCorner()
    {
        return 7;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }

    public function getParentCorner()
    {
        return parent::getCorner();
    }
}