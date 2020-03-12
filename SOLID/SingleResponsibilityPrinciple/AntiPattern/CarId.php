<?php
declare(strict_types=1);

namespace SingleResponsibilityPrinciple\AntiPattern;

class CarId
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
