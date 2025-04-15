<?php

use Data\Category;

require_once "data/Category.php";


$category = new Category;
$category->setName("Handphone");
$category->setExpensive(true);


$category->setName(""); /* Ini merupakan data tidak valid */
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expesnsive : {$category->isExpensive()}" . PHP_EOL;
