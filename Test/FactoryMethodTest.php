<?php

namespace Test;

use Creational\FactoryMethod\BenzBrand;
use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BmwBrand;
use Creational\FactoryMethod\BmwBrandFactory;
use Creational\FactoryMethod\MercedBrand;
use Creational\FactoryMethod\MercedBrandFcatory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    //Client View
    public function testCanBuildBmwBrand()
    {
        $brandFactory = new BmwBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BmwBrand::class, $myBrand);
    }

    public function testCanBuildBenzBrand()
    {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }

    public function testCanBuildMercedBrand()
    {
        $brandFactory = new MercedBrandFcatory();
        $myBrand = $brandFactory->BuildBrand();
        $this->assertInstanceOf(MercedBrand::class, $myBrand);
    }
}