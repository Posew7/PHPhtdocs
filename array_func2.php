<?php

$arr = [1, 2, 3, 4, 5];

$arr = array_map(function ($val) {
    return $val * 2;
}, $arr);

//print_r($arr);

$arr = ["yunus", "", "üstün", " ", "7", ""];

$arr = array_filter($arr);

//print_r($arr);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

//print_r($arr3);

$arr = [
    "ad" => "yunus",
    "soyad" => "üstün",
    "yaş" => 23
];

//print_r(array_rand($arr,2));

$arr = array_reverse($arr);
//print_r($arr);
$arr = array_reverse($arr);

$arr = [1,1,2,2,2,3,3,4,5,2,2,2,1,1,1,3];

$arr= array_unique($arr);

print_r($arr);

$arr = array_values($arr);

print_r($arr);