<?php

namespace Service {

    use Entity\DataModel;
    use Repository\DataModelRepository;

    interface DataModelService
    {
        function showDataModel(): void;
        function addDataModel(string $data): void;
        function removeDataModel(): void;
    }

    class DataModelServiceImpl implements DataModelService
    {
        private DataModelRepository $datamodelRepository;

        public function __construct(DataModelRepository $datamodelRepository)
        {
            $this->datamodelRepository = $datamodelRepository;
        }

        function addDataModel(string $data): void
        {
            $datamodel = new DataModel($data);
            $this->datamodelRepository->save($datamodel);
            //echo "Data Berhasil Di Tambah". PHP_EOL;
        }

        function showDataModel(): void
        {
            $dataModel = array();
            echo PHP_EOL;

            echo "*Keterangan Data Pribadi Anda : " . PHP_EOL;

            $datamodel = $this->datamodelRepository->findAll();
            foreach ($datamodel as $number => $value) {
                $dataModel[] = $value->getData();
            }

            $nama = ($dataModel == null) ? "" : $dataModel[0];
            echo "Nama Lengkap Anda Adalah : $nama" . PHP_EOL;
            $kerja = ($dataModel == null) ? "" : $dataModel[1];
            echo "Pekerjaan Anda Adalah : $kerja" . PHP_EOL;
            $umur = ($dataModel == null) ? "" : $dataModel[2];
            echo "Umur Anda Adalah : $umur" . PHP_EOL;
            $alamat = ($dataModel == null) ? "" : $dataModel[3];
            echo "Alamat Anda Adalah : $alamat" . PHP_EOL;
        }

        function removeDataModel(): void
        {
            $this->datamodelRepository->remove();
            // if ($this->datamodelRepository->remove()) {
            //     echo "SUKSES MENGHAPUS DATA" . PHP_EOL;
            // } else {
            //     echo "GAGAL MENGHAPUS DATA" . PHP_EOL;
            // }
        }
    }
}