<?php

namespace View {

    use Service\DataAngkaService;
    use Helper\InputHelper;

    class DataAngkaView
    {
        private DataAngkaService $dataangkaService;

        public function __construct(DataAngkaService $dataangkaService)
        {
            $this->dataangkaService = $dataangkaService;
        }

        function addDataAngka(): void
        {
            echo "Input Perhitungan Data : " . PHP_EOL;

            $opsi = InputHelper::input("(y untuk setuju / x untuk batal)");

            if ($opsi == "x") {
                echo "Batal input perhitungan data" . PHP_EOL;
            } elseif ($opsi == "y") {
                $data = InputHelper::input("Masukkan Angka Pertama ");
                $data2 = InputHelper::input("Masukkan Angka Kedua ");

                $this->dataangkaService->addDataAngka($data);
                $this->dataangkaService->addDataAngka($data2);
            } else {
                echo "Inputan Pilihan Tidak Ketahui" . PHP_EOL;
            }
        }

        function showDataAngka(): void
        {
            while (true) {
                echo "Menu" . PHP_EOL;
                echo "1. Input Data" . PHP_EOL;
                echo "x. Exit" . PHP_EOL;
        
                $pilihan = InputHelper::input("pilih");
        
                if ($pilihan == "1") {
                    $this->removeDataAngka();
                    $this->addDataAngka();
                    $this->dataangkaService->showDataAngka();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan Tidak di Mengerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function removeDataAngka(): void
        {
            $this->dataangkaService->removeDataAngka(0);
            $this->dataangkaService->removeDataAngka(1);
        }
    }
}