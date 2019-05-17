<?php

$ad = "posew7";
$sayi = 7;

$dizi = array($ad,$sayi,8.8,"test");

print_r($dizi);

print $dizi[0];

$kimlik = array(
    "ad" => "yunus",
    "soyad" => "üstün",
    "meslek" => "öğrenci",
    "yas" => "23"
);

print_r($kimlik);

print $kimlik["ad"];

print "<br>";

$siteler = array("kategori" => [
    "e-ticaret" => [
        "hepsiburada",
        "n11",
        "sahibinden"
    ],
    "eğitim" => [
        "udemy",
        "protürk"
    ]
]);

print_r($siteler);

print $siteler["kategori"]["eğitim"][0];

?>