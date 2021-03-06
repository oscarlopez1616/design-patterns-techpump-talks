<?php
declare(strict_types=1);

namespace DependencyInjectionPrinciple\AntiPattern;

use DependencyInjectionPrinciple\AntiPattern\CarId;

class CarController
{
    private function postMechanicalWorkShopAction(CarId $carId): int
    {
        $carCommunicationService = new CarCommunicationService();
        $carCommunicationService->sendPremiumRestaurantEmailToMechanicalWorkShop($carId);
        return 201;
    }

}
