<?php

use Entity\TodoList;
use PHPUnit\Event\Code\Test;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Service/TodoListService.php";

function testShowTodolist()
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = new TodoList("Hari ini Belajar PHP");
    $todoListRepository->todoList[2] = new TodoList("Hari ini Belajar Bahasa Inggris");
    $todoListRepository->todoList[3] = new TodoList("Hari ini Belajar Tailwind");
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}


function testAddTodolist(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("asdas");
    $todoListService->addTodoList("sad");
    $todoListService->addTodoList("KOw");

    $todoListService->showTodoList();
}

TestAddTodolist();


function testRemoveTodolist(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("asdas");
    $todoListService->addTodoList("sad");
    $todoListService->addTodoList("KOw");
    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
}

testShowTodolist();
testRemoveTodolist();
