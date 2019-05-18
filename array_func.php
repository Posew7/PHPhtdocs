<?php

$arr = [
    "ad" => "yunus",
    "soyad" => "üstün",
    "yaş" => 23
];

//print_r($arr);
//var_dump($arr);

$arr = "yunus,üstün,23";

$arr2 = explode(",", $arr);
//print_r($arr2);

$string = implode(" | ", $arr2);
//print $string;

$arr = [
    "ad" => "yunus",
    "soyad" => "üstün",
    "yaş" => 23
];

//print count($arr);

/*
if (is_array($arr)){
    print "bu bir array";
}else{
    print "bu array değil";
}
*/

//shuffle($arr);
//print_r($arr);

/*

$dizi1 = ["ad","soyad"];
$dizi2 = ["yunus","üstün"];

$dizi3 = array_combine($dizi1,$dizi2);
print_r($dizi3);

*/

/*
$arr = ["yunus","yunus","üstün",7,7,7];
print_r(array_count_values($arr));

*/

$arr = [
    "ad" => "yunus",
    "soyad" => "üstün",
    "yaş" => 23
];

/*
 *
$arr = array_flip($arr);
print_r($arr);

*/

$arr = [
    "a" => "b",
    "c" => [
        "d" => [
            "e" => [
                "f" => "e"
            ]
        ]
    ]
];
/*
if (array_key_exists("a", $arr)){
    print "it's key";
}else{
    print "key değil";
}
*/
function _array_key_exists($anahtar,$arr){
    foreach ($arr as $key => $value){
        if($anahtar == $key){
            return true;
        }
        if (is_array($value)){
            return _array_key_exists($anahtar,$value);
        }
    }
    return false;
}

if (_array_key_exists("f", $arr)){
    print "it's key";
}else{
    print "key değil";
}

