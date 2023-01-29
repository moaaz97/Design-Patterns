<?php

namespace Creational\FactoryMethod;

class BmwBrand implements CarBrandInterface
{
    public function createBrand()
    {
        // TODO: Implement createBrand() method.
        return "BMW Brand";
    }
}