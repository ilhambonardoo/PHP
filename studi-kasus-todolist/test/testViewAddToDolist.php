<?php


require_once __DIR__."/../view/viewAddShowToDolist.php";
require_once __DIR__."/../businesslogic/showToDolist.php";
require_once __DIR__."/../businesslogic/addToDolist.php";

addTodolist("Iqwrham");
addTodolist("as");

viewAddShowtodoList();

showTodoList();