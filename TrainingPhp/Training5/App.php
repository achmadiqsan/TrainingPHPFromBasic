<?php

require_once __DIR__ . "/Model/DataModel.php";
require_once __DIR__ . "/BusinessLogic/ShowDataNumber.php";
require_once __DIR__ . "/BusinessLogic/AddDataNumber.php";
require_once __DIR__ . "/View/ViewShowDataNumber.php";
require_once __DIR__ . "/View/ViewAddDataNumber.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Sederhana Input Perhitungan Data" . PHP_EOL;

viewShowDataNumber();