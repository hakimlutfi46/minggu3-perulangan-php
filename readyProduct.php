<?php

$stok = 10;
$pesanan = 15;

if ($pesanan <= $stok) {
    echo "Produk tersedia. Silakan pesan.";
} else {
    echo "Maaf, stok produk tidak mencukupi.";
}
