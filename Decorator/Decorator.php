<?php
declare(strict_types=1);

namespace Decorator;

abstract class Decorator implements InfoCar
{
    /**
     * @var InfoCar
     */
    private $car;

    public function __construct(InfoCar $car)
    {
        $this->car = $car;
    }

    public function showInfo(): string
    {
        return $this->car->showInfo();
    }
}
