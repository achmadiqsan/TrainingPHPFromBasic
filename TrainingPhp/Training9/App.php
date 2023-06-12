<?php

require_once __DIR__ . '/Entity/DataAngka.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/DataAngkaRepository.php';
require_once __DIR__ . '/Service/DataAngkaService.php';
require_once __DIR__ . '/View/DataAngkaView.php';

use Repository\DataAngkaRepositoryImpl;
use Service\DataAngkaServiceImpl;
use View\DataAngkaView;

echo "Aplikasi Sederhana Input Perhitungan Data" . PHP_EOL;

$dataangkaRepository = new DataAngkaRepositoryImpl();
$dataangkaService = new DataAngkaServiceImpl($dataangkaRepository);
$dataangkaView = new DataAngkaView($dataangkaService);

$dataangkaView->showDataAngka();