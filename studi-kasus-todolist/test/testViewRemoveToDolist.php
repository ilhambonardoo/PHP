<?php

require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../view/viewRemoveShowToDolist.php";
require_once __DIR__."/../businesslogic/addToDolist.php";
require_once __DIR__."/../businesslogic/showToDolist.php";

addTodolist("Ilham");
addTodolist("Bonardo");
addTodolist("Marpaung");
addTodolist("Ghina");
addTodolist("Rania");
addTodolist("Vokasi");
addTodolist("IPB");

showTodoList();
viewRemovetodoList();
showTodoList();





?>