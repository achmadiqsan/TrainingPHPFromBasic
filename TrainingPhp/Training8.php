<?php

echo "**Menentukan Jenis Kelamin**" . PHP_EOL;
$jk = (string)readline('Masukkan Kode Jenis Kelamin (L/W) : ');

if (($jk == "L") || ($jk == "l")) {
    echo "Jenis Kelamin Laki-Laki";
} elseif (($jk == "W") || ($jk == "w")) {
    echo "Jenis Kelamin Wanita";
} else {
    echo "Kode yang Anda Masukkan tidak Di Kenali";
}