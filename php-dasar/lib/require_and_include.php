<?php 

// require "lib/Myfunction.php;
// include "lib/Myfunction.php";

require_once "lib/Myfunction.php";
require_once "lib/Myfunction.php"; /* once ini untuk memanggil 2 kali require */

include_once "lib/Myfunction.php";
include_once "lib/Myfunction.php"; /* once ini untuk memanggil 2 kali inluced*/

echo sayHello("Ilham","Bonardo");