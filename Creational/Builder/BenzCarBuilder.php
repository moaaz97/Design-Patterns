<?php

namespace Creational\Builder;

use Creational\Builder\CarBuilderInterface;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;
    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BenzCar();
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart("ENGINE", "engine");
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart("BODY", "body");
    }
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart("DOOR", "door");
    }
    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart("WHEEL", "wheel");

    }
    public function getCar() : Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }

}