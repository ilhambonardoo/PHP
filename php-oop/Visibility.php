<?php

/*
Ada 3 VISIBILITY 
public -> Bisa diakses dimana saja seperti classnya sendiri, subclass, dan diluar file tersbut
protected -> Bisa diakses di classnya sendiri dan turunan dari classnya sendiri, tidak bisa diakses dari luar file
private -> Hanya bisa diakses di classnya sendiri, tidak bisa diakses dari turunan class ataupun luar file
*/


require_once "data/Product.php";


use data\Product;

$product = new Product("Apple", 10000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

/* 
    $product->name = $name;
    jika memanggil $name menggunakan code diatas maka akan terjadi Error karena name itu private yang artinya hanya 
    bisa diakses di class itu saja, tidak bisa diakses di luar class tersebut.
*/