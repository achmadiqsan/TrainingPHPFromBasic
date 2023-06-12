<?php

namespace Entity {

    class DataAngka
    {
        private int $data;

        public function __construct(int $data = 0)
        {
            $this->data = $data;
        }

        public function getData() : int 
        {
            return $this->data;
        }

        public function setData(int $data): void
        {
            $this->data = $data;
        }
    }
}