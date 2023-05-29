<?php

echo "**Perhitungan Data**" . PHP_EOL;
$a1 = (int)readline('Masukkan Angka Pertama : ');
$a2 = (int)readline('Masukkan Angka Kedua : ');

// Proses Perhitungan :
$ht = $a1 + $a2;
$hk = $a1 - $a2;
$hkl = $a1 * $a2;
$hb = $a1 / $a2;
$rt = ($a1 + $a2) / 2;

echo PHP_EOL;
echo "**Hasil Perhitungan Data**" . PHP_EOL;
echo "Hasil Penjumlahan : $ht" . PHP_EOL;
echo "Hasil Pengurangan : $hk" . PHP_EOL;
echo "Hasil Perkalian : $hkl" . PHP_EOL;
echo "Hasil Pembagian : " . number_format($hb,2) . PHP_EOL;
echo "Hasil Rata-rata : " . number_format($rt,2) . PHP_EOL;

