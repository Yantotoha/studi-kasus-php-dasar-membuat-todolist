<?php
require_once "Model/TodoList.php";
require_once "View/viewRemoveTodoList.php";
require_once "BusineesLogic/AddtodoList.php";
require_once "BusineesLogic/showTodoList.php";

AddTodoList("Hamzah");
AddTodoList("Fathur");
AddTodoList("Fathir");
AddTodoList("Fajri");
AddTodoList("Fatma");

showTodoList();

viewRemoveTodoList();

showTodoList();
