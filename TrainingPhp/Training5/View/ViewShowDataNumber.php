<?php

require_once __DIR__ . "/../Model/DataModel.php";
require_once __DIR__ . "/../BusinessLogic/ShowDataNumber.php";
require_once __DIR__ . "/../View/ViewAddDataNumber.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowDataNumber()
{
    global $dataModel;

    while (true) {
        echo "Menu" . PHP_EOL;
        echo "1. Input Data" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == "1") {
            if ($dataModel != null) {
                unset($dataModel[0]);
                unset($dataModel[1]);
            }
            viewAddDataNumber();
            showDataNumber();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak di Mengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
