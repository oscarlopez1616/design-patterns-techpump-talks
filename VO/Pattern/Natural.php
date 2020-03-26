<?php


namespace VO\Pattern;


use Exception;

class Natural extends ValueObject
{
    private int $value;

    /**
     * Natural constructor.
     * @param float $value
     * @throws Exception
     */
    public function __construct(
        float $value
    ) {
        $this->guard($value);
        $this->value = round($value);
    }


    /**
     * @param float $value
     * @throws Exception
     */
    private function guard(float $value): void
    {
        if($value < 0){
            throw new Exception('negative value is not allowed in Natural Type');
        }
    }

    public function value(): int
    {
        return $this->value;
    }

    /**
     * @param ValueObject|self $o
     *
     * @return bool
     */
    protected function equalValues(ValueObject $o): bool
    {
        return $this->value() === $o->value();
    }
}

