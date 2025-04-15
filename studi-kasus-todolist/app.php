<?php

require_once __DIR__."/model/todolist.php";
require_once __DIR__."/businesslogic/addToDolist.php";
require_once __DIR__."/businesslogic/showToDolist.php";
require_once __DIR__."/businesslogic/removeToDolist.php";
require_once __DIR__."/view/viewAddShowToDolist.php";
require_once __DIR__."/view/viewRemoveShowToDolist.php";
require_once __DIR__."/view/viewShowToDolist.php";
require_once __DIR__."/helper/input.php";

echo "Aplikasi Todo List" .PHP_EOL;

viewShowtodoList();

?>