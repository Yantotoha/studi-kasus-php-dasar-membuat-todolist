<?php

function AddTodoList(string $todo)
{
  global $todoList;

  $number = sizeOf($todoList) + 1;

  $todoList[$number] = $todo;
}
