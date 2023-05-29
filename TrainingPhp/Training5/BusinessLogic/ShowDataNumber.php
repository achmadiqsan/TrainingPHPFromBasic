<?php

function showDataNumber()
{
    global $dataModel;

    // Proses cek Data :
    $a1 = ($dataModel == null) ? 0 : $dataModel[0];
    $a2 = ($dataModel == null) ? 0 : $dataModel[1];

    // Proses Perhitungan :
    if (($a1 == null) && ($a2 == null)) {
        $ht = 0;
        $hk = 0;
        $hkl = 0;
        $hb = 0;
        $rt = 0;
    } else {
        $ht = $a1 + $a2;
        $hk = $a1 - $a2;
        $hkl = $a1 * $a2;
        $hb = $a1 / $a2;
        $rt = ($a1 + $a2) / 2;   
    }

    // Proses Menampilkan Data :
    echo PHP_EOL;
    echo "**Hasil Perhitungan Data**" . PHP_EOL;
    echo "Hasil Penjumlahan : $ht" . PHP_EOL;
    echo "Hasil Pengurangan : $hk" . PHP_EOL;
    echo "Hasil Perkalian : $hkl" . PHP_EOL;
    echo "Hasil Pembagian : " . number_format($hb,2) . PHP_EOL;
    echo "Hasil Rata-rata : " . number_format($rt,2) . PHP_EOL;
}