<?php

require_once __DIR__ . "/../Entity/DataModel.php";
require_once __DIR__ . "/../Repository/DataModelRepository.php";
require_once __DIR__ . "/../Service/DataModelService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\DataModel;
use Service\DataModelServiceImpl;
use Repository\DataModelRepositoryImpl;

function testAddDataModel(): void
{
    $connection = \Config\Database::getConnection();
    $datamodelRepository = new DataModelRepositoryImpl($connection);

    $datamodelService = new DataModelServiceImpl($datamodelRepository);
    $datamodelService->addDataModel("Achmad Iqsan");
    $datamodelService->addDataModel("IT");
    $datamodelService->addDataModel("24");
    $datamodelService->addDataModel("Gunung Jati");
}

function testShowDataModel(): void
{
    $connection = \Config\Database::getConnection();
    $datamodelRepository = new DataModelRepositoryImpl($connection);

    $datamodelService = new DataModelServiceImpl($datamodelRepository);
    $datamodelService->addDataModel("AI");
    $datamodelService->addDataModel("IT");
    $datamodelService->addDataModel("24");
    $datamodelService->addDataModel("GJ");

    $datamodelService->showDataModel();
}

function testRemoveDataModel(): void
{
    $connection = \Config\Database::getConnection();
    $datamodelRepository = new DataModelRepositoryImpl($connection);

    $datamodelService = new DataModelServiceImpl($datamodelRepository);
    echo $datamodelService->removeDataModel() . PHP_EOL;
}

testShowDataModel();