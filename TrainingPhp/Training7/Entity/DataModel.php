<?php

namespace Entity {

    class DataModel
    {

        private int $id;

        private string $data;

        public function __construct(string $data="")
        {
            $this->data = $data;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function getData(): string
        {
            return $this->data;
        }

        public function setData(string $data): void
        {
            $this->data = $data;
        }
    }
}