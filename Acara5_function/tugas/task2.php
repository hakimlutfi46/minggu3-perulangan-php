<?php
$tanggal = getdate();

echo "Today is " . $tanggal['weekday'] . " " . $tanggal['mday'] . " " . $tanggal['month'] . " " . $tanggal['year'];
