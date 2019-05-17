<?php

$anonim = function($a,$b){
    return $a+$b;
};

print $anonim(1,3);

$func_array = [
    function(){
        return "1. func";
    },
    function(){
        return "2. func";
    },
    function(){
        return "3. func";
    }
];

print_r($func_array);

print $func_array[rand(0,2)]();

$sayi = 7;

function filt($i){
    return $i . " " . 7;
}

$dizi = ["p","o","s","e","w"];
$dizi = array_map(function($is) use($sayi){
    return $is . " " . $sayi;
},$dizi);

print_r($dizi);