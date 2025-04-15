<?php

require_once "data/Manager.php";

/* 
    - Inheritance adalah kemampuan untuk menurunkan sebuah class ke class lain.
    - Dalam artian, kita bisa membuat class parent dan class child.
    - Class child hanya bisa mempunyai satu class Parent, namun class parent bisa mempunyai banyak class.
    - Class parent diturunkan maka otomatis objec yang dimiliki oleh class parent itu dimiliki oleh class child.
    - Untuk menurunkan class itu menggunakan kata kunci exstends.
*/


$manager = new Manager();
$manager->name = "Ilham";
$manager->sayHello("Ghina");

$vp = new Manager();
$vp->name = "Ghina";
$vp->sayHello("Ilham");