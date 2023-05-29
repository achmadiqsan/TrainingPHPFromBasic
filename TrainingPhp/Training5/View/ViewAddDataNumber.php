<?php

require_once __DIR__ . "/../Model/DataModel.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddDataNumber.php";

function viewAddDataNumber()
{
    echo "Input Perhitungan Data : " . PHP_EOL;

    $opsi = input("(y untuk setuju / x untuk batal)");

    if ($opsi == "x") {
        echo "Batal input perhitungan data" . PHP_EOL;
    } elseif ($opsi == "y") {
        $data = input("Masukkan Angka Pertama ");
        $data2 = input("Masukkan Angka Kedua ");

        addDataNumber($data);
        addDataNumber($data2);
    } else {
        echo "Inputan Pilihan Tidak Ketahui" . PHP_EOL;
    }
}