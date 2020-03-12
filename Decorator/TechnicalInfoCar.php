<?php
declare(strict_types=1);

namespace Decorator;

class TechnicalInfoCar extends Decorator
{
    public function __construct(InfoCar $car)
    {
        parent::__construct($car);
    }

    protected function showTechnicalInfoCar(): string
    {
        return "BMW 200CV\n";
    }

    public function showInfo(): string
    {
        return parent::showInfo().$this->showTechnicalInfoCar();
    }
}
