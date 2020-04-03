<?php


//json формат

//unserialize()
//
//AJAX
//
//{
//    "name": "Программист Программистович"
//    "phone":
//    "1234556798"
//    "1255534556798"
//}




//string json_encod(mixed $val,  int $opt = 0, int $d = 512)





$a=["name" => "Программист Программистович",
    "phone" =>
   [ "1234556798",
    "1255534556798"]];
 echo json_encode($a);










?>
