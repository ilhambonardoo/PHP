<?php
require_once __DIR__."/../businesslogic/addToDolist.php";
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../model/todolist.php";
function viewAddShowtodoList ()
    {
        echo "Menambah Todo".PHP_EOL;
        $todo = input("Todo (x untuk batal) ") ;

        if ($todo == "x"){
            echo "Batal menambah Todo".PHP_EOL;
        }else{
            addTodolist($todo);
        }
    }

?>