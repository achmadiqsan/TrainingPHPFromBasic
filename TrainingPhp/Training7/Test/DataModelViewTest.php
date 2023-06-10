<?php

require_once __DIR__ . '/../Entity/DataModel.php';
require_once __DIR__ . '/../Repository/DataModelRepository.php';
require_once __DIR__ . '/../Service/DataModelService.php';
require_once __DIR__ . '/../View/DataModelView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';
require_once __DIR__ . "/../Config/Database.php";

use \Entity\DataModel;
use \Repository\DataModelRepositoryImpl;
use \Service\DataModelServiceImpl;
use \View\DataModelView;

function testViewAddDataModel(): void
{
    $connection = \Config\Database::getConnection();
    $datamodelRepository = new DataModelRepositoryImpl($connection);
    $datamodelService = new DataModelServiceImpl($datamodelRepository);
    $datamodelView = new DataModelView($datamodelService);

    $datamodelView->addDataModel();
    $datamodelService->showDataModel();

}

function testRemoveDataModel()
{
    $connection = \Config\Database::getConnection();
    $datamodelRepository = new DataModelRepositoryImpl($connection);
    $datamodelService = new DataModelServiceImpl($datamodelRepository);
    $datamodelView = new DataModelView($datamodelService);

    $datamodelView->removeDataModel();
    $datamodelService->showDataModel();
}

function testViewShowDataModel()
{
    $connection = \Config\Database::getConnection();
    $datamodelRepository = new DataModelRepositoryImpl($connection);
    $datamodelService = new DataModelServiceImpl($datamodelRepository);
    $datamodelView = new DataModelView($datamodelService);

    $datamodelView->showDataModel();
}


testViewShowDataModel();