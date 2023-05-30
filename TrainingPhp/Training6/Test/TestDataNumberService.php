<?php

require_once __DIR__ . "/../Entity/DataNumber.php";
require_once __DIR__ . "/../Repository/DataNumberRepository.php";
require_once __DIR__ . "/../Service/DataNumberService.php";

use Entity\DataNumber;
use Service\DataNumberServiceImpl;
use Repository\DataNumberRepositoryImpl;

function testShowDataNumber(): void
{
    $datanumberRepository = new DataNumberRepositoryImpl();
    $datanumberRepository->datanumber[0] = new DataNumber("Achmad Iqsan");
    $datanumberRepository->datanumber[1] = new DataNumber("IT");
    $datanumberRepository->datanumber[2] = new DataNumber("24");
    $datanumberRepository->datanumber[3] = new DataNumber("Gunung Jati");

    $datanumberService = new DataNumberServiceImpl($datanumberRepository);

    $datanumberService->showDataNumber();
}

function testAddDataNumber(): void
{
    $datanumberRepository = new DataNumberRepositoryImpl();

    $datanumberService = new DataNumberServiceImpl($datanumberRepository);

    $datanumberService->addDataNumber("AI");
    $datanumberService->addDataNumber("IT");
    $datanumberService->addDataNumber("24");
    $datanumberService->addDataNumber("GJ");
}

function testRemoveDataNumber(): void
{
    $datanumberRepository = new DataNumberRepositoryImpl();

    $datanumberService = new DataNumberServiceImpl($datanumberRepository);

    $datanumberService->addDataNumber("AI");
    $datanumberService->addDataNumber("IT");
    $datanumberService->addDataNumber("24");
    $datanumberService->addDataNumber("GJ");
    
    $datanumberService->showDataNumber();
    $datanumberService->removeDataNumber(1);
    $datanumberService->showDataNumber();
}

testRemoveDataNumber();