<?php
require_once "Model/TodoList.php";
require_once "BusineesLogic/removeTodoList.php";
require_once "BusineesLogic/AddTodoList.php";
require_once "BusineesLogic/showTodoList.php";

AddTodoList("Eko");
AddTodoList("Kurniawan");
AddTodoList("kannedy");
AddTodoList("Karina");
AddTodoList("kurawat");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(2);
showTodoList(4);
