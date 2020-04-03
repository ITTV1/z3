<?php

# Пересечение множеств в массивах

//array  array_intersect(array $arr1, list $arr2 [, list  $arr3])


  $a = ["yellow", "blue", "black"];
  $colors = ["red", "yellow", "green", "blue", "black"];
  $int = array_intersect($colors, $a);
  print_r($int);
  //
?>
