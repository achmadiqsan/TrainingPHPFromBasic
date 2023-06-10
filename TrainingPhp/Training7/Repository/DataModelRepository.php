<?php

namespace Repository {

    use Entity\DataModel;

    interface DataModelRepository
    {
        function save(DataModel $datamodel): void;
        function remove(): bool;
        function findAll(): array;
    }

    class DataModelRepositoryImpl implements DataModelRepository
    {
        public array $datamodel = array();

        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        function save(DataModel $datamodel): void
        {
            // var_dump($datanumber);
            $sql = "INSERT INTO datamodel2(datamodel) VALUES (?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$datamodel->getData()]);
        }

        function findAll() : array 
        {
            $sql = "SELECT id, datamodel FROM datamodel2";
            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];

            foreach ($statement as $row) {
                $datamodel = new DataModel();
                $datamodel->setID($row['id']);
                $datamodel->setData($row['datamodel']);

                $result[] = $datamodel;
            }

            return $result;
        }

        function remove(): bool
        {
            $sql = "SELECT id FROM dataModel2";
            $statement = $this->connection->prepare($sql);
            $statement->execute();

            if ($statement->fetch()) {
                $sql = "DELETE FROM dataModel2";
                $statement = $this->connection->prepare($sql);
                $statement->execute();
                return true;
            } else {
                return false;
            }
        }
    }
}