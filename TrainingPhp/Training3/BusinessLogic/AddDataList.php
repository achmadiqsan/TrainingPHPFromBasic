<?php 

function addDataList(string $data)
{
	global $dataModel;

	$number = sizeof($dataModel);

	$dataModel[$number] = $data;
}

 ?>