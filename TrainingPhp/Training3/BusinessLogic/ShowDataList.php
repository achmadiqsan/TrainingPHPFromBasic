<?php 

function showDataList()
{
	global $dataModel;

	echo PHP_EOL;
	echo "*Keterangan Data Pribadi Anda : " . PHP_EOL;

	$nama = ($dataModel == null) ? "" : $dataModel[0];
	echo "Nama Lengkap Anda Adalah : $nama"  . PHP_EOL;
	$kerja = ($dataModel == null) ? "" : $dataModel[1];
	echo "Pekerjaan Anda Adalah : $kerja"  . PHP_EOL;
	$umur = ($dataModel == null) ? "" : $dataModel[2];
	echo "Umur Anda Adalah : $umur"  . PHP_EOL;
	$alamat = ($dataModel == null) ? "" : $dataModel[3];
	echo "Alamat Anda Adalah : $alamat"  . PHP_EOL;

	// var_dump($dataModel);
}



 ?>