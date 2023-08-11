<?php

function removeTodoList(int $number): bool
{
  global $todoList;

  if ($number > sizeOf($todoList)) {
    return false;
  }

  for ($i = $number; $i < sizeOf($todoList); $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }
  unset($todoList[sizeOf($todoList)]);

  return true;
}
