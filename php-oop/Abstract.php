<?php

/* 
    Abstract class artinya class tersbut tidak bisa digunakan sebgai object secara langsung, hanya bisa diturunkan.
    Abstract class hanya bisa digunakan sebagi kontrak child class.
*/

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); ERROR

$city = new City();
$province = new Province();
$country = new Country();
