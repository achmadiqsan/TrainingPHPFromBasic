<?php

namespace Service {

    use Entity\DataNumber;
    use Repository\DataNumberRepository;

    interface DataNumberService
    {
        function showDataNumber(): void;
        function addDataNumber(string $data): void;
        function removeDataNumber(int $number): void;
    }

    class DataNumberServiceImpl implements DataNumberService
    {
        private DataNumberRepository $datanumberRepository;

        public function __construct(DataNumberRepository $datanumberRepository)
        {
            $this->datanumberRepository = $datanumberRepository;
        }

        function showDataNumber(): void
        {
            $dataModel = array();
            echo PHP_EOL;
                echo "*Keterangan Data Pribadi Anda : " . PHP_EOL;

                $datanumber = $this->datanumberRepository->findAll();
                foreach ($datanumber as $number => $value) {
                    $dataModel[] = $value->getData();
                }

                // var_dump($datanumber);
                // var_dump($dataModel);

                $nama = ($dataModel == null) ? "" : $dataModel[0];
                echo "Nama Lengkap Anda Adalah : " . $nama  . PHP_EOL;
                $kerja = ($dataModel == null) ? "" : $dataModel[1];
                echo "Pekerjaan Anda Adalah : $kerja"  . PHP_EOL;
                $umur = ($dataModel == null) ? "" : $dataModel[2];
                echo "Umur Anda Adalah : $umur"  . PHP_EOL;
                $alamat = ($dataModel == null) ? "" : $dataModel[3];
                echo "Alamat Anda Adalah : $alamat"  . PHP_EOL;
        }

        function addDataNumber(string $data): void
        {
            $datanumber = new DataNumber($data);
            $this->datanumberRepository->save($datanumber);
            // var_dump($datanumber);
        }

        function removeDataNumber(int $number): void
        {
            $this->datanumberRepository->remove($number);
        }
    }
}