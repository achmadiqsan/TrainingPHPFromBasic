<?php

namespace Repository {
    
    use Entity\DataNumber;

    interface DataNumberRepository
    {
        function save(DataNumber $datanumber): void;

        function remove(int $number): bool;

        function findAll():array;
    }

    class DataNumberRepositoryImpl implements DataNumberRepository {

        public array $datanumber = array();

        function save(DataNumber $datanumber): void
        {
            $number = sizeof($this->datanumber);
            $this->datanumber[$number] = $datanumber;
        }

        function findAll(): array
        {
            return $this->datanumber;
        }

        function remove(int $number): bool
        {
            unset($this->datanumber[$number]);

            return true;
        }
    }
}