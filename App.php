<?php


/*link input data lewat url
https://www.php.net/manual/en/function.fgets.php
*/
require_once "Model/TodoList.php";
require_once "BusineesLogic/showTodoList.php";
require_once "BusineesLogic/AddtodoList.php";
require_once "BusineesLogic/removeTodoList.php";
require_once "View/viewShowTodoList.php";
require_once "View/viewAddTodoList.php";
require_once "View/viewRemoveTodoList.php";
require_once "helper/input.php";


echo "Aplikasi Todo list" . PHP_EOL;

viewShowTodoList();
