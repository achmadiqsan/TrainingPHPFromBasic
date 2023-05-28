<?php 


require_once __DIR__ . '/Model/DataModel.php';
require_once __DIR__ . '/BusinessLogic/ShowDataList.php';
require_once __DIR__ . '/BusinessLogic/AddDataList.php';
require_once __DIR__ . '/View/ViewShowDataList.php';
require_once __DIR__ . '/View/ViewAddDataList.php';
require_once __DIR__ . '/Helper/Input.php';

echo "Aplikasi Input Data Pribadi" . PHP_EOL;

viewShowDataList();

 ?>