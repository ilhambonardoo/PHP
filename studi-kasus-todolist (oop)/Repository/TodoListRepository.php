<?php


namespace Repository {

    use Entity\TodoList;
    use Illuminate\Support\Arr;

    interface TodoListRepository
    {
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {

        public array $todoList = array();


        function save(TodoList $todoList): void
        {
            $number = sizeof($this->todoList) + 1;

            $this->todoList[$number] = $todoList;
        }

        function remove(int $number): bool
        {
            if (!isset($this->todoList[$number])) {
                return false;
            }

            unset($this->todoList[$number]);

            // Reindex array agar nomor tetap berurutan dari 1
            $this->todoList = array_values($this->todoList);

            // Karena array dimulai dari index 0, kita perbaiki index menjadi mulai dari 1
            $newTodoList = [];
            foreach ($this->todoList as $index => $todo) {
                $newTodoList[$index + 1] = $todo;
            }
            $this->todoList = $newTodoList;

            return true;
        }

        function findAll(): array
        {
            return $this->todoList;
        }
    }
}
