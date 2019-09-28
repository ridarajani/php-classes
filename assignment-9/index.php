<?php

$array = ["Apple", "ognaM", "Banana", "elppA"];
$string = "";
foreach($array as $key => $value){
    if($key % 2 != 0){
        $reverse = strrev($value);
        $string.=$reverse." "; 
    }
    if($key % 2 == 0){
        $string.=$value." ";
    }
}
$string = substr($string , 0 , -6);
echo $string;