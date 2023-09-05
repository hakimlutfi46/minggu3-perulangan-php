<?php
$username = "hakim";
$password = "hakim123";

$truename = "hakim";
$truepass = "hakim123";

if ($username == $truename && $password == $truepass) {
    echo "<h1>";
    echo "Selamat datang " . $username;
    echo "</h1>";
} else {
    echo "<h1>";
    echo "Username atau Password salah!!!";
    echo "</h1>";
}
