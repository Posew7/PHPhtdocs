<?php

$arr = [
    "isim" => "yunus",
    "soyad" => "üstün",
    "spor" => [
        "yüzme" => "evet",
        "futbol" => "evet",
        "savunma" => [
            "boks" => "evet",
            "mma" => "hayır"
        ]
    ]
];

function dizide_bul($dizi,$anahtar){
    foreach ($dizi as $item => $value){
        if ($item == $anahtar){
            return $value;
        }
        if (is_array($value)){
            $sonuc = dizide_bul($value,$anahtar);
            if ($sonuc){
                return $sonuc;
            }
        }
    }
    return false;
}

print_r(dizide_bul($arr,"savunma"));
print dizide_bul($arr,"boks");