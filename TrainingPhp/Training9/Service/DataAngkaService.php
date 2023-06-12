<?php

namespace Service {

    use Entity\DataAngka;
    use Repository\DataAngkaRepository;

    interface DataAngkaService
    {
        function addDataAngka(int $data): void;
        function showDataAngka(): void;
    }

    class DataAngkaServiceImpl implements DataAngkaService
    {
        private DataAngkaRepository $dataangkaRepository;

        public function __construct(DataAngkaRepository $dataangkaRepository)
        {
            $this->dataangkaRepository = $dataangkaRepository;
        }

        function addDataAngka(int $data): void
        {
            $dataangka = new DataAngka($data);
            $this->dataangkaRepository->save($dataangka);
            // var_dump($dataangka);
        }

        function showDataAngka(): void
        {
            $dataAngka = array();
            echo PHP_EOL;
            echo "**Hasil Perhitungan Data**" . PHP_EOL;

            $dataangka = $this->dataangkaRepository->findAll();
            foreach ($dataangka as $number => $value) {
                $dataAngka[] = $value->getData();
            }

            // var_dump($dataAngka);
            $a1 = ($dataAngka == null) ? 0 : $dataAngka[0];
            $a2 = ($dataAngka == null) ? 0 : $dataAngka[1];

            // Proses Perhitungan :
            if (($a1 == null) && ($a2 == null)) {
                $ht = 0;
                $hk = 0;
                $hkl = 0;
                $hb = 0;
                $rt = 0;
            } else {
                $ht = $a1 + $a2;
                $hk = $a1 - $a2;
                $hkl = $a1 * $a2;
                $hb = $a1 / $a2;
                $rt = ($a1 + $a2) / 2;   
            }
            echo "Hasil Penjumlahan : $ht" . PHP_EOL;
            echo "Hasil Pengurangan : $hk" . PHP_EOL;
            echo "Hasil Perkalian : $hkl" . PHP_EOL;
            echo "Hasil Pembagian : " . number_format($hb,2) . PHP_EOL;
            echo "Hasil Rata-rata : " . number_format($rt,2) . PHP_EOL;
        }

        function removeDataAngka(int $number): void
        {
            $this->dataangkaRepository->remove($number);
        }
    }
}