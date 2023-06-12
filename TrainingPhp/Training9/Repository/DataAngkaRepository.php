<?php

namespace Repository {

    use Entity\DataAngka;

    interface DataAngkaRepository
    {
        function save(DataAngka $dataangka): void;
        function findAll(): array;
        function remove(int $number): bool;
    }

    class DataAngkaRepositoryImpl implements DataAngkaRepository {

        public array $dataangka = array();

        function save(DataAngka $dataangka): void
        {
            $number = sizeof($this->dataangka);
            $this->dataangka[$number] = $dataangka;
        }

        function findAll(): array
        {
            return $this->dataangka;
        }

        function remove(int $number): bool
        {
            unset($this->dataangka[$number]);

            return true;
        }
    }

    
}