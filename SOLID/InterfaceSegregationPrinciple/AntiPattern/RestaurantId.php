<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;

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
