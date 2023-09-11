<?php
$num1 = 150;
$num2 = 100;

function getBig($a, $b)
{
    if ($a > $b) {
        echo "Nilai " . $a . " lebih besar dari nilai " . $b;
    } else {
        echo "Nilai " . $b . " lebih besar dari nilai " . $a;
    }
}

echo getBig($num1, $num2);
