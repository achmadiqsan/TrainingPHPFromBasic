<?php

require_once __DIR__ . "/../Entity/DataAngka.php";
require_once __DIR__ . "/../Repository/DataAngkaRepository.php";
require_once __DIR__ . "/../Service/DataAngkaService.php";

use Entity\DataAngka;
use Service\DataAngkaServiceImpl;
use Repository\DataAngkaRepositoryImpl;

function testAddDataAngka(): void
{
    $dataangkaRepository = new DataAngkaRepositoryImpl();
    $dataangkaService = new DataAngkaServiceImpl($dataangkaRepository);

    $dataangkaService->addDataAngka(10);
    $dataangkaService->addDataAngka(2);
}

function testShowDataAngka(): void
{
    $dataangkaRepository = new DataAngkaRepositoryImpl();
    $dataangkaService = new DataAngkaServiceImpl($dataangkaRepository);

    $dataangkaRepository->dataangka[0] = new DataAngka(5);
    $dataangkaRepository->dataangka[1] = new DataAngka(4);

    $dataangkaService->showDataAngka();
}

function testRemoveDataAngka(): void
{
    $dataangkaRepository = new DataAngkaRepositoryImpl();

    $dataangkaService = new DataAngkaServiceImpl($dataangkaRepository);

    $dataangkaService->addDataAngka(6);
    $dataangkaService->addDataAngka(7);
    
    $dataangkaService->showDataAngka();
    $dataangkaService->removeDataAngka(0);
    $dataangkaService->showDataAngka();
}

testRemoveDataAngka();
