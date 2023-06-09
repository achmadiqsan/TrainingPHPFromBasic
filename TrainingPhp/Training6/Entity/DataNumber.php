<?php

namespace Entity {

    class DataNumber
    {
        private string $data;

        public function __construct(string $data = "")
        {
            $this->data = $data;
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