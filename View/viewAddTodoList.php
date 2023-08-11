<?php

require_once "Model/TodoList.php";
require_once "BusineesLogic/AddtodoList.php";
require_once "helper/input.php";
function viewAddTodoList()
{
  echo "\n";
  echo "View Add ToDo" . PHP_EOL;
  echo "\n";
  $todo = input("Todo (x untuk batal)");

  if ($todo == "x") {
    return showTodoList($todo);
  } else {
    addTodoList($todo);
  }
}
