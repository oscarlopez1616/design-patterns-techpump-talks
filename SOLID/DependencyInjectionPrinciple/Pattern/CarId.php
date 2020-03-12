<?php
declare(strict_types=1);

namespace DependencyInjectionPrinciple\Pattern;

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
