<?php

namespace Creational\FactoryMethod;

class BmwBrandFactory implements BrandFactory
{
    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new BmwBrand();
    }
}