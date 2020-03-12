<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\Pattern\NewFeature;

class Restaurant
{
    /**
     * @var String
     */
    private $name;

    /**
     * @var Order[]
     */
    private $orderStack;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->orderStack = [];
    }


    public function makeAnOrder(): void
    {

    }
}

