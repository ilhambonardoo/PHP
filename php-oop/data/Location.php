<?php


/* 
    Abstract class artinya class tersbut tidak bisa digunakan sebgai object secara langsung, hanya bisa diturunkan.
    Abstract class hanya bisa digunakan sebagi kontrak child class.
*/

namespace Data;

abstract class Location
{

}

class City extends Location
{

}

class Province extends Location
{

}

class Country extends Location
{

}
