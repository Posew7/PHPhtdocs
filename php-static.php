<?php

function say()
{
    static $sayi = 1;
    print $sayi . "<br>";
    $sayi++;
}

say();
say();
say();
say();
say();
say();
say();


print "<br>" . "<br>" . "<br>";

function ekle($deger)
{
    static $yuklenenler = [];
    $yuklenenler[] = $deger;
    return $yuklenenler;
}

ekle("index.php");
ekle("deneme.php");
ekle("a.php");
print_r(ekle("qwe"));