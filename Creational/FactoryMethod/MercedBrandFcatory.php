<?php

namespace Creational\FactoryMethod;

class MercedBrandFcatory implements BrandFactory
{
    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new MercedBrand();
    }

}