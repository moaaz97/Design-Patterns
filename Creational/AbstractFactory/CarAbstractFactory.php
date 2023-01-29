<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
        private $tax = 2000;
        private $price;

        public function __construct($price)
        {
            $this->price = $price;
        }

        public function createBMWCar() : BMWCar
        {
            return new BMWCar($this->price);
        }

        public function createBenzCar() : BenzCar
        {
            return new BenzCar($this->tax, $this->price);
        }
}