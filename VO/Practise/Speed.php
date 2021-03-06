<?php

namespace VO\Practise;

use Exception;
use VO\Pattern\Natural;
use VO\Pattern\ValueObject;

class Speed extends ValueObject
{

    const KM = 'km';
    const METERS = 'm';


    private Natural $value;

    private string $unit;

    /**
     * Speed constructor.
     * @param Natural $value
     * @param string $unit
     * @throws Exception
     */
    public function __construct(Natural $value, string $unit)
    {
        $this->guard($unit);
        $this->value = $value;
        $this->unit = $unit;
    }


    public static function createSpeedInKilometers(Natural $value): self
    {
       // TODO create a factory method (also called named constructor) which creates a Speed in kilometers
        return new self($value, self::KM);
    }


    public static function createSpeedInMeters(Natural $value): self
    {
        // TODO create a factory method (also called named constructor) which creates a Speed in meters
        return new self($value, self::METERS);
    }

    /**
     * @param string $unit
     * @throws Exception
     */
    private function guard(string $unit): void
    {
        if (!in_array($unit, [self::METERS, self::KM])) {
            throw new Exception('not valid unit');
        }
        /**
         * TODO build a function which throw an Exception whether the unit is not an allowed unit: allowed units are
         * meters and kilometers
         */
    }

    /**
     * @param Speed $speed
     * @return $this
     * @throws Exception
     */
    public function addSpeed(Speed $speed,ProviderSpeedService $providerSpeedService): self
    {
        $providerSpeedService->speedIsAllowedOrFail($speed);
        //TODO return new Speed with 2 values added
        return new Speed($this->toKilometers()->getValue()->value() + $speed->toKilometers()->getValue()->value());
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function toKilometers(): self
    {
        if($this->getUnit() === 'meters'){
            return new Speed(new Natural($this->value->value()/1000),'kilometers');
        }
        return  $this;
    }

    /**
     * @return $this
     * @throws Exception
     */
    public function toMeters(): self
    {
        if($this->getUnit() === 'kilometers'){
            return new Speed(new Natural($this->value->value()*1000),'meters');
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
