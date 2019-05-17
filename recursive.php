<?php

$kategoriler = [
    [
        "id" => 1,
        "parent" => 0,
        "ad" => "dersler"
    ],
    [
        "id" => 2,
        "parent" => 0,
        "ad" => "güncel"
    ],
    [
        "id" => 3,
        "parent" => 0,
        "ad" => "blog"
    ],
    [
        "id" => 4,
        "parent" => 1,
        "ad" => "PHP"
    ],
    [
        "id" => 5,
        "parent" => 1,
        "ad" => "CSS"
    ],
    [
        "id" => 6,
        "parent" => 4,
        "ad" => "function"
    ],
    [
        "id" => 7,
        "parent" => 6,
        "ad" => "recursive"
    ],
    [
        "id" => 8,
        "parent" => 4,
        "ad" => "for loop"
    ]
];

function kategori_list($kategoriler,$parent=0){
    $html = "";
    $html .= "<ul>";
    foreach ($kategoriler as $kategori){
        if ($kategori["parent"] == $parent){
            $html .= "<li>" . $kategori["ad"];
            $html .= kategori_list($kategoriler,$kategori["id"]);
            $html .= "</li>";
        }
    }
    $html .= "</ul>";
    return $html;
}

print kategori_list($kategoriler);

