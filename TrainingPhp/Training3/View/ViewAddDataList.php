<?php 

require_once __DIR__ . '/../Model/DataModel.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/AddDataList.php';

function viewAddDataList()
{
	echo "Input Data Pribadi Anda : " . PHP_EOL;
	$opsi = input("(y untuk setuju / x untuk Batal)");

	if ($opsi == "x") {
		echo "Batal menambah Data Pribadi" . PHP_EOL;
	} else if ($opsi == "y") {
		$data = input("Nama Lengkap ");
		$data2 = input("Pekerjaan ");
		$data3 = input("Umur ");
		$data4 = input("Alamat Lengkap ");

		addDataList($data);
		addDataList($data2);
		addDataList($data3);
		addDataList($data4);
	} else {
		echo "Inputan Pilihan Tidak Di Kenali" . PHP_EOL;
	}

}



 ?>