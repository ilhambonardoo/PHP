<?php

require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../businesslogic/removeToDolist.php";

function viewRemovetodoList() 
{

    echo "Menghapus Todo" . PHP_EOL;
    $pilihan = input ("Pilih nomor (x untuk batal)");

    if ($pilihan == "x"){
        echo "Batal menghapus Todo".PHP_EOL;        
    }else{
       $succsess = removeTodoList($pilihan);
        if ($succsess){
            echo "Berhasil menghapus todo nomor $pilihan".PHP_EOL;
        }else{
            echo "Gagal menghapus todo".PHP_EOL;
        }
    }
}

?>