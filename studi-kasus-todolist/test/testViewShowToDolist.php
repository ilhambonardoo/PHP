<?php

require_once __DIR__."/../view/viewShowToDolist.php";
require_once __DIR__."/../businesslogic/addToDolist.php";

addTodolist("Ilham");
addTodolist("Bonardo");
addTodolist("Marpaung");
addTodolist("GANTENG");
viewShowtodoList();

?>