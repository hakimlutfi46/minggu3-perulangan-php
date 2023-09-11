<?php

function perkalian($angka1, $angka2)
{
    $a = $angka1;
    $b = $angka2;
    $hasil = $a * $b;
    return $hasil;
}

$hasil = perkalian(4, 5);
echo "Perkalian 4 x 5 adalah $hasil";
