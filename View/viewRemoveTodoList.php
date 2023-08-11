<?php
require_once "helper/input.php";
require_once "BusineesLogic/removeTodoList.php";

function viewRemoveTodoList()
{

  echo "\n";
  echo "Menghapus ToDo" . PHP_EOL;
  echo "\n";
  $pilihan = input("Nomor (x untuk batal)");

  if ($pilihan == "x") {
    echo "Batal Menghapus Todo" . PHP_EOL;
  } else {
    $success = removeTodoList($pilihan);

    if ($success) {
      echo "Sukses menghapus Todo Nomor $pilihan" . PHP_EOL;
    } else {
      echo "Gagal menghapus Todo Nomor $pilihan" . PHP_EOL;
    }
  }
}
