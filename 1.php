<?php

//Работа с множествами
//
//Разность в массивах
//
//
//array array_diff(array $arr1 , list $arr2 [ , list $arr3 , ...])

//
//Объединение в массивах
//
//array_merge()
//
//array array_unique(array $arr)


$programmist = array("b" => "red", "green", "c" => "red", "blue", "yellow");
$html = array_unique($programmist);
print_r($html);


?>
