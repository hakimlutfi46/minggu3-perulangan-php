<?php
echo "MEMBUAT FUNGSI <br>";

function berhasil()
{
    echo "SELAMAT ANDA BERHASIL";
};

function gagal()
{
    echo "MAAF ANDA GAGAL";
};

$nilai = 90;

if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}

echo "<br>";
echo "FUNGSI DENGAN PARAMETER <br>";

function jumlah($a, $b)
{
    $nilai1 = 10;
    $nilai2 = 15;
}
