<?php

function addDataNumber(int $data)
{
    global $dataModel;

    $number = sizeof($dataModel);

    $dataModel[$number] = $data;
}