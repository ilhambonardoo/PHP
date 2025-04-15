<?php
require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../businesslogic/showToDolist.php";
require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../view/viewAddShowToDolist.php";
require_once __DIR__."/../view/viewRemoveShowToDolist.php";
function viewShowtodoList ()
{
 while (true){
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo". PHP_EOL; 
    echo "2. Hapus Todo". PHP_EOL; 
    echo "x. Keluar". PHP_EOL; 

    $pilihan = input("Pilih"); 

    if ($pilihan == "1") {
        viewAddShowtodoList();
    }elseif ($pilihan == "2"){
        viewRemovetodoList();
    }elseif ($pilihan == "x"){
        // keluar   
        break;
    }else{
        echo "Pilihan tidak dimengerti." . PHP_EOL;
    }
 }

 echo "Sampai Jumpa lagi".PHP_EOL;
}

?>