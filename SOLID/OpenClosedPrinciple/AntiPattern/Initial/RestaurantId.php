<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\AntiPattern\Initial;

class RestaurantId
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

}
