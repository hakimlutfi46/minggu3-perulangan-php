<?php
// Matrix pertama
$matixA = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3),

);

// Matrix kedua
$matixB = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1),
);

// Matrix hasil penjumlahan 
$hasil = array();

// Melakukan penjumlahan matix
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $matixA[$i][$j] + $matixB[$i][$j];
    }
}

// Menampilkan hasil 
echo "Matiks Hasil Penjumlahan : <br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasil[$i][$j];
    }
    echo "<br>";
}
