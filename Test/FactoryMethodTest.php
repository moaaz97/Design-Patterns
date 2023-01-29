<?php

namespace Test;

use Creational\FactoryMethod\BenzBrand;
use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BmwBrand;
use Creational\FactoryMethod\BmwBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
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
}