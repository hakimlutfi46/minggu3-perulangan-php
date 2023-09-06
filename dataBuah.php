<?php

$fruits = array(
    array("nama" => "Apel", "warna" => "Merah", "harga" => 5000),
    array("nama" => "Jeruk", "warna" => "Oranye", "harga" => 3000),
    array("nama" => "Mangga", "warna" => "Hijau", "harga" => 7000),
    array("nama" => "Pisang", "warna" => "Kuning", "harga" => 2000)
);


foreach ($fruits as $fruit) {
    echo "Buah: " . $fruit["nama"] . "<br>";
    echo "Warna: " . $fruit["warna"] . "<br>";
    echo "Harga: Rp." . $fruit["harga"] . "<br><br>";
}
