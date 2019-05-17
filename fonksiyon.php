<?php

function topla($a,$b){
    return $a+$b;
}

print topla(3,8);



$sayi = 13;

$isim = ["p","o","s","e","w"];
$arr = array_map(function($isim) use($sayi){
    return $isim ." ".$sayi;
},$arr);

print_r($arr);

?>