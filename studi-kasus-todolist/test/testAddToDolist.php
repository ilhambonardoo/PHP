<?php 

require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../businesslogic/addToDolist.php";

addTodolist("Ilham");
addTodolist("Bonardo");
addTodolist("Marpaung");

var_dump($todoList);

?>