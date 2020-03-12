<?php
declare(strict_types=1);

namespace Decorator;

class ColorInfoCar implements InfoCar
{
    public function showInfo(): string
    {
        return "Red Car\n";
    }
}
