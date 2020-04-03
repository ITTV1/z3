<?php

# Объединение множеств  в массиве
  $b = ["yellow", "blue", "black"];
  $c = ["red", "yellow", "green", "blue", "black"];
  $su = array_unique(array_merge($c, $b));
  print_r($su);
  //Array ( [0] => red [1] => yellow [2] => green [3] => blue [4] => black )
?>
