<?php

require_once __DIR__ . '/../Entity/DataAngka.php';
require_once __DIR__ . '/../Repository/DataAngkaRepository.php';
require_once __DIR__ . '/../Service/DataAngkaService.php';
require_once __DIR__ . '/../View/DataAngkaView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\DataAngka;
use \Repository\DataAngkaRepositoryImpl;
use \Service\DataAngkaServiceImpl;
use \View\DataAngkaView;

function testViewAddDataAngka(): void
{
    $dataangkaRepository = new DataAngkaRepositoryImpl();
    $dataangkaService = new DataAngkaServiceImpl($dataangkaRepository);
    $dataangkaView = new DataAngkaView($dataangkaService);

    $dataangkaView->addDataAngka();
    $dataangkaService->showDataAngka();
}

function testViewShowDataAngka()
{
    $dataangkaRepository = new DataAngkaRepositoryImpl();
    $dataangkaService = new DataAngkaServiceImpl($dataangkaRepository);
    $dataangkaView = new DataAngkaView($dataangkaService);

    $dataangkaView->showDataAngka();
}

testViewShowDataAngka();