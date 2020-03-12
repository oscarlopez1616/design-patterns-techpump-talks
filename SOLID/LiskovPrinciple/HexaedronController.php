<?php
declare(strict_types=1);

namespace LiskovPrinciple;

class HexaedronController
{
    public function getHexahedronAction(): float
    {
        return (new Hexahedron())->calculateArea();
    }

    public function getOrtohedronAction(): float
    {
        return (new Ortohedron())->calculateArea();
    }
}
