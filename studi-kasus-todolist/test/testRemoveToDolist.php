<?php

require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../businesslogic/addToDolist.php";
require_once __DIR__."/../businesslogic/showToDolist.php";
require_once __DIR__."/../businesslogic/removeToDolist.php";

addTodolist("Ilham");
addTodolist("Bonardo");
addTodolist("Ghina");
addTodolist("Rania");
addTodolist("Marpaung");

showTodoList();
removeTodoList(2);
showTodoList();
$success = removeTodoList(5);
var_dump($success);




