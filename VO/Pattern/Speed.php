<?php

namespace VO\Pattern;

use Exception;

class Speed extends ValueObject
{
    public const KILOMETERS = 'kilometers';
    public const METERS = 'meters';

    public const ALLOWED_UNITS = [
        self::KILOMETERS,
        self::METERS
    ];

    private Natural $value;

    private string $unit;

    /**
     * Speed constructor.
     * @param Natural $value
     * @param string $unit
     * @throws Exception
     */
    private function __construct(Natural $value, string $unit)
    {
        $this->guard($unit);
        $this->value = $value;
        $this->unit = $unit;
    }

    /**
     * @param Natural $value
     * @return static
     * @throws Exception
     */
    public static function createSpeedInKilometers(Natural $value): self
    {
        return new self($value,self::KILOMETERS);
    }

    /**
     * @param Natural $value
     * @return static
     * @throws Exception
     */
    public static function createSpeedInMeters(Natural $value): self
    {
        return new self($value,self::METERS);
    }

    /**
     * @param string $unit
     * @throws Exception
     */
    private function guard(string $unit): void
    {
        foreach (self::ALLOWED_UNITS as $allowedUnit) {
            if ($unit === $allowedUnit) {
                return;
            }
        }
        throw new Exception("unit: " . $unit . "not allowed");
    }

    /**
     * @param Speed $speed
     * @return $this
     * @throws Exception
     */
    public function addSpeed(Speed $speed): self
    {
        if($this->getUnit() === self::KILOMETERS){
            return new self(
                new Natural($this->value->value() + $speed->toKilometers()->value->value()),
                self::KILOMETERS
            );
        }

        return new self(
             new Natural($this->toMeters()->value->value() + $speed->toMeters()->value->value()),
            self::METERS
        );
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function toKilometers(): self
    {
        if($this->getUnit() === self::METERS){
            return new Speed(new Natural($this->value->value()/1000),self::KILOMETERS);
        }
        return  $this;
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function toMeters(): self
    {
        if($this->getUnit() === self::KILOMETERS){
            return new Speed(new Natural($this->value->value()*1000),self::METERS);
        }
        return  $this;
    }



    public function getValue(): Natural
    {
        return $this->value;
    }


    public function getUnit(): string
    {
        return $this->unit;
    }


    /**
     * @param self|ValueObject $o
     * @return bool
     */
    protected function equalValues(ValueObject $o): bool
    {
        return $this->value->equals($o->getValue()) && $this->unit === $o->getUnit();
    }

}
