<?php

namespace View {

    use Service\DataNumberService;
    use Helper\InputHelper;

    class DataNumberView
    {

        private DataNumberService $datanumberService;

        public function __construct(DataNumberService $datanumberService)
        {
            $this->datanumberService = $datanumberService;
        }

        function addDataNumber(): void
        {
            echo "Input Data Pribadi Anda : " . PHP_EOL;
            $opsi = InputHelper::input("(y untuk setuju / x untuk Batal)");

            if ($opsi == "x") {
                echo "Batal menambah Data Pribadi" . PHP_EOL;
            } else if ($opsi == "y") {
                $nama = InputHelper::input("Nama Lengkap ");
                $kerja = InputHelper::input("Pekerjaan ");
                $umur = InputHelper::input("Umur ");
                $alamat = InputHelper::input("Alamat Lengkap ");
        
                $this->datanumberService->addDataNumber($nama);
                $this->datanumberService->addDataNumber($kerja);
                $this->datanumberService->addDataNumber($umur);
                $this->datanumberService->addDataNumber($alamat);
            } else {
                echo "Inputan Pilihan Tidak Di Kenali" . PHP_EOL;
            }

        }

        function showDataNumber(): void
        {
            while (true) {
                echo "MENU" . PHP_EOL;
                echo "1. Input Data" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;
        
                $pilihan = InputHelper::input("Pilih");
        
                if ($pilihan == "1") {
                    $this->removeDataNumber();
                    $this->addDataNumber();
                    $this->datanumberService->showDataNumber();
                } else if ($pilihan == "x"){
                    break;
                } else {
                    echo "Pilihan Tidak di Menegerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function removeDataNumber(): void
        {
            $this->datanumberService->removeDataNumber(0);
            $this->datanumberService->removeDataNumber(1);
            $this->datanumberService->removeDataNumber(2);
            $this->datanumberService->removeDataNumber(3);
        }
    }
}