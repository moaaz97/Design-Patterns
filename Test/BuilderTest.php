<?php

namespace Test;

use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testProduceBmwCar()
    {
        $BMWBuilder = new BMWCarBuilder();
        $carProducer = new CarProducer($BMWBuilder);
        $myCar = $carProducer->ProductCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testProduceBenzCar()
    {
        $BenzBuilder = new BenzCarBuilder();
        $carProducer = new CarProducer($BenzBuilder);
        $myCar = $carProducer->ProductCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }

}