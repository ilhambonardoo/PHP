<?php

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/helper/inputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi Todo List" . PHP_EOL;


$todolistRepostiory = new TodoListRepositoryImpl();
$todolistService = new TodoListServiceImpl($todolistRepostiory);
$todolistView = new TodoListView($todolistService);

$todolistView->showTodoList();
