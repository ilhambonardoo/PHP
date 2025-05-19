<?php


require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../helper/inputHelper.php";
require_once __DIR__ . "/../View/TodoListView.php";

use \Entity\TodoList;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpl;
use \View\TodoListView;



function testViewShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Ilham");
    $todoListService->addTodoList("Bonardo");
    $todoListService->addTodoList("Marpaung");

    $todoListView->showTodoList();
}

testViewShowTodoList();


function testViewAddTodolist(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Ilham");
    $todoListService->addTodoList("Bonardo");
    $todoListService->addTodoList("Marpaung");

    $todoListService->showTodoList();
    $todoListView->addTodoList();
    $todoListService->showTodoList();
}

testViewAddTodolist();

function testViewRemoveTodolist(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Ilham");
    $todoListService->addTodoList("Bonardo");
    $todoListService->addTodoList("Marpaung");

    $todoListService->showTodoList();
    $todoListView->removeTodoList();
    $todoListService->showTodoList();
}

testViewRemoveTodolist();
