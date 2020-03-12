<?php
declare(strict_types=1);

namespace DependencyInjectionPrinciple\AntiPattern;

interface Car
{
    public function getId(): CarID;
    public function showInfo(): string;
    public function brake(): void;
    public function switchOnEngine(): void;
    public function switchOffEngine(): void;
    public function isBroken(): bool;
}
