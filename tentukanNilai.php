<?php
$nilai = 85;

if ($nilai >= 90) {
    $grade = 'A';
} elseif ($nilai >= 80) {
    $grade = 'B';
} elseif ($nilai >= 70) {
    $grade = 'C';
} elseif ($nilai >= 60) {
    $grade = 'D';
} else {
    $grade = 'E';
}

echo "Grade Anda adalah: $grade";
