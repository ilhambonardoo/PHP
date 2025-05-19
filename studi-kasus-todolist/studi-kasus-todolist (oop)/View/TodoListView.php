<?php

namespace View {

    use Helper\inputHelper;
    use Repository\TodoListRepository;
    use Service\TodoListService;


    class TodoListView
    {
        private TodoListService $todoListService;
        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void
        {
            while (true) {

                $this->todoListService->showTodoList();
                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = inputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodoList();
                } elseif ($pilihan == "2") {
                    $this->removeTodoList();
                } elseif ($pilihan == "x") {
                    // keluar   
                    break;
                } else {
                    echo "Pilihan tidak dimengerti." . PHP_EOL;
                }
            }

            echo "Sampai Jumpa lagi" . PHP_EOL;
        }
        function addTodoList(): void
        {
            echo "Menambah Todo" . PHP_EOL;
            $todo = inputHelper::input("Todo (x untuk batal) ");

            if ($todo == "x") {
                echo "Batal menambah Todo" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($todo);
                echo "BERHASIL MENAMBAH TODO" . PHP_EOL;
            }
        }
        function removeTodoList(): void
        {
            echo "Menghapus Todo" . PHP_EOL;
            $pilihan = inputHelper::input("Pilih nomor (x untuk batal)");

            if ($pilihan == "x") {
                echo "Batal menghapus Todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList($pilihan);
            }
        }
    }
}
