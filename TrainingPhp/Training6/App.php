<?php

require_once __DIR__ . '/Entity/DataNumber.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/DataNumberRepository.php';
require_once __DIR__ . '/Service/DataNumberService.php';
require_once __DIR__ . '/View/DataNumberView.php';

use Repository\DataNumberRepositoryImpl;
use Service\DataNumberServiceImpl;
use View\DataNumberView;

echo "Aplikasi Input Data Pribadi" . PHP_EOL;

$datanumberRepository = new DataNumberRepositoryImpl();
$datanumberService = new DataNumberServiceImpl($datanumberRepository);
$datanumberView = new DataNumberView($datanumberService);

$datanumberView->showDataNumber();