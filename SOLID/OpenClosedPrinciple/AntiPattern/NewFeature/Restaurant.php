<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\AntiPattern\NewFeature;

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

    /**
     * @var Gift
     */
    private $gift;

    public function __construct(string $name, Gift $gift)
    {
        $this->name = $name;
        $this->orderStack = [];
        $this->gift = $gift;
    }


    public function makeAnOrder(): void
    {
        // TODO: Implement makeAnOrder() method.
    }

    public function makeAnPremiumOrder(): void
    {
        // TODO: Implement makeAnPremiumOrder() method.
    }
}
