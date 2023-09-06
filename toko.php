<?php
$kategori = 'elektronik';

switch ($kategori) {
    case 'elektronik':
        echo "Tampilkan produk elektronik.";
        break;
    case 'fashion':
        echo "Tampilkan produk fashion.";
        break;
    case 'olahraga':
        echo "Tampilkan produk olahraga.";
        break;
    default:
        echo "Kategori produk tidak valid";
}
