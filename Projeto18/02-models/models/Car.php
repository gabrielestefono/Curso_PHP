<?php

    class car {

        private $id;
        private $brand;
        private $km;
        private $color;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->brand;
        }

        public function getKm(){
            return $this->km;
        }

        public function setKm($km){
            $this->km;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color;
        }

    }


interface CarDAO{

    public function create(Car $car);
    public function findAll();

}