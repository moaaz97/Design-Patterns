<?php

namespace Creational\FactoryMethod;

class BenzBrand implements CarBrandInterface
{
    public function createBrand()
    {
        // TODO: Implement createBrand() method.
        return "Benz Brand";
    }
}