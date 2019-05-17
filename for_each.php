<?php

$dizi = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($dizi as $i) {
    print $i . "<br>";
}

$kimlik = array(
    "ad" => "yunus",
    "soyad" => "üstün",
    "meslek" => "öğrenci",
    "yas" => "23"
);

foreach ($kimlik as $key => $arg) {
    print $key . " = " . $arg . "<br>";
}

?>