<?php

namespace View {

    use Service\DataModelService;
    use Helper\InputHelper;

    class DataModelView
    {

        private DataModelService $datamodelService;

        public function __construct(DataModelService $datamodelService)
        {
            $this->datamodelService = $datamodelService;
        }

        function addDataModel() : void
        {
            echo "Input Data Pribadi Anda : "     . PHP_EOL;
            $opsi = InputHelper::input("(y untuk setuju / x untuk batal)");

            if ($opsi == "x") {
                echo "Batal menambah Data Pribadi" . PHP_EOL;
            } else if ($opsi == "y") {
                $nama = InputHelper::input("Nama Lengkap ");
                $kerja = InputHelper::input("Pekerjaan ");
                $umur = InputHelper::input("Umur ");
                $alamat = InputHelper::input("Alamat Lengkap ");
        
                $this->datamodelService->addDataModel($nama);
                $this->datamodelService->addDataModel($kerja);
                $this->datamodelService->addDataModel($umur);
                $this->datamodelService->addDataModel($alamat);
            } else {
                echo "Inputan Pilihan Tidak Di Kenali" . PHP_EOL;
            }
        }

        function removeDataModel(): void
        {
            $this->datamodelService->removeDataModel();
        }

        function showDataModel(): void
        {
            while (true) {
                echo "MENU" . PHP_EOL;
                echo "1. Input Data" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;
        
                $pilihan = InputHelper::input("Pilih");
        
                if ($pilihan == "1") {
                    $this->removeDataModel();
                    $this->addDataModel();
                    $this->datamodelService->showDataModel();
                } else if ($pilihan == "x"){
                    break;
                } else {
                    echo "Pilihan Tidak di Menegerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }
    }
}