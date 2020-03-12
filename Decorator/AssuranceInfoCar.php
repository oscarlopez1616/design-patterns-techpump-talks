<?php
declare(strict_types=1);

namespace Decorator;

class AssuranceInfoCar extends Decorator
{
    public function __construct(InfoCar $car)
    {
        parent::__construct($car);
    }

    public function showAssuranceInfoCar(): string
    {
        return "Alliance Assurance\n";
    }

    public function showInfo(): string
    {
        return parent::showInfo().$this->showAssuranceInfoCar();
    }
}
