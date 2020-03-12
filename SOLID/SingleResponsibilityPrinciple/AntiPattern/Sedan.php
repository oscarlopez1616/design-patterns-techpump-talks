<?php
declare(strict_types=1);

namespace SingleResponsibilityPrinciple\AntiPattern;

class Sedan implements Car
{
    /**
     * @var CarId
     */
    private $id;

    /**
     * @var @CarModel
     */
    private $model;

    /**
     * @var @CarEngine
     */
    private $engine;

    public function __construct(CarId $id, $model, $engine)
    {
        $this->id = $id;
        $this->model = $model;
        $this->engine = $engine;
    }

    public function getId(): CarID
    {
        // TODO: Implement getId() method.
    }


    public function showInfo(): string
    {
        // TODO: Implement showInfo() method.
    }

    public function brake(): void
    {
        // TODO: Implement brake() method.
    }

    public function switchOnEngine(): void
    {
        // TODO: Implement switchOnEngine() method.
    }

    public function switchOffEngine(): void
    {
        // TODO: Implement switchOffEngine() method.
    }

    public function isBroken(): bool
    {
        // TODO: Implement isBroken() method.
    }

    public function sendEmailToMechanicalWorkShop(): void
    {
        // TODO: Implement sendEmailToMechanicalWorkShop() method.
    }
}
