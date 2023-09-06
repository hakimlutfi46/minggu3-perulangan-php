<?php
$umur = 25;

if ($umur < 12) {
    $kategori = 'Anak-anak';
} elseif ($umur >= 12 && $umur < 18) {
    $kategori = 'Remaja';
} elseif ($umur >= 18 && $umur < 60) {
    $kategori = 'Dewasa';
} else {
    $kategori = 'Lansia';
}

echo "Kategori umur Anda adalah: $kategori";
