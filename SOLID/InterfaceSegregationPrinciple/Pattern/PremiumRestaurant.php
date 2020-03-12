<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;


class PremiumRestaurant extends Restaurant
{
    /**
     * @var Gift
     */
    private $gift;

    public function __construct(string $name, Gift $gift)
    {
        $this->$gift = $gift;
        parent::__construct($name);
    }

    public function makeAPremiumOrder(): void
    {
        // TODO: Implement makeAnPremiumOrder() method.
    }

}
