<?php
declare(strict_types=1);

namespace Decorator;

class Client
{
    /**
     * @var InfoCar
     */
    private $car;

    public function __construct()
    {
        $this->car = new ColorInfoCar();
        $this->car = $this->wrapComponent($this->car);

        echo $this->car->showInfo();
    }

    private function wrapComponent(InfoCar $car)
    {
        $car1 = new TechnicalInfoCar($car);
        return new AssuranceInfoCar($car1);
    }
}


