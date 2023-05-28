<?php 

require_once __DIR__ . '/../Model/DataModel.php';
require_once __DIR__ . '/../BusinessLogic/ShowDataList.php';
require_once __DIR__ . '/../View/ViewAddDataList.php';
require_once __DIR__ . '/../Helper/Input.php';


function viewShowDataList()
{
	global $dataModel;
	
	while (true) {
		echo "MENU" . PHP_EOL;
		echo "1. Input Data" . PHP_EOL;
		echo "x. Exit" . PHP_EOL;

		$pilihan = input("Pilih");

		if ($pilihan == "1") {
			if ($dataModel != null) {
				unset($dataModel[0]);
				unset($dataModel[1]);
				unset($dataModel[2]);
				unset($dataModel[3]);
			}
			viewAddDataList();
			showDataList();
		} else if ($pilihan == "x"){
			break;
		} else {
			echo "Pilihan Tidak di Menegerti" . PHP_EOL;
		}
	}
	echo "Sampai Jumpa Lagi" . PHP_EOL;
}


 ?>