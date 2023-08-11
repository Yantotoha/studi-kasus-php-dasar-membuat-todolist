<?php
require_once "Model/TodoList.php";
require_once "BusineesLogic/showTodoList.php";
require_once "View/viewAddTodoList.php";
require_once "View/viewRemoveTodoList.php";
require_once "helper/input.php";

function viewShowTodoList()
{
  //agar perulangan nya terus berjalan kita gunakan while(true)
  while (true) {
    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;
    $pilihan = input(trim("Pilih"));

    if ($pilihan == "1") {
      viewAddTodoList();
    } else if ($pilihan == "2") {
      viewRemoveTodoList();
    } else if ($pilihan == "x") {
      break;
    } else {
      echo "Pilihan Tidak Di mengerti" . PHP_EOL;
    }
  }
  echo "Sampai jumpa Lagi" . PHP_EOL;
}
