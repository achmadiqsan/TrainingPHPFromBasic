<?php

require_once __DIR__ . '/../Entity/DataNumber.php';
require_once __DIR__ . '/../Repository/DataNumberRepository.php';
require_once __DIR__ . '/../Service/DataNumberService.php';
require_once __DIR__ . '/../View/DataNumberView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\DataNumber;
use \Repository\DataNumberRepositoryImpl;
use \Service\DataNumberServiceImpl;
use \View\DataNumberView;

function testViewAddDataNumber(): void
{
    $datanumberRepository = new DataNumberRepositoryImpl();
    $datanumberService = new DataNumberServiceImpl($datanumberRepository);
    $datanumberView = new DataNumberView($datanumberService);

    $datanumberView->addDataNumber();
    $datanumberService->showDataNumber();
}

function testViewShowDataNumber()
{
    $datanumberRepository = new DataNumberRepositoryImpl();
    $datanumberService = new DataNumberServiceImpl($datanumberRepository);
    $datanumberView = new DataNumberView($datanumberService);

    $datanumberView->showDataNumber();
}

function testRemoveDataNumber()
{
    $datanumberRepository = new DataNumberRepositoryImpl();
    $datanumberService = new DataNumberServiceImpl($datanumberRepository);
    $datanumberView = new DataNumberView($datanumberService);

    $datanumberService->addDataNumber("AI");
    $datanumberService->addDataNumber("IT");
    $datanumberService->addDataNumber("24");
    $datanumberService->addDataNumber("GJ");
    $datanumberService->addDataNumber("BB");
    
    $datanumberService->showDataNumber();
    $datanumberView->removeDataNumber();
    $datanumberService->showDataNumber();

}

testViewShowDataNumber();