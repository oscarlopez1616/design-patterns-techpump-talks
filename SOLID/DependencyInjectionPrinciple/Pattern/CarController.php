<?php
declare(strict_types=1);

namespace DependencyInjectionPrinciple\Pattern;

use DependencyInjectionPrinciple\AntiPattern\CarId;

class CarController
{
    /**
     * @var CarCommunicationService
     */
    private $carCommunicationService;

    public function __construct(CarCommunicationService $carCommunicationService)
    {
        $this->carCommunicationService = $carCommunicationService;
    }

    private function postMechanicalWorkShopAction(CarId $carId): int
    {
        $this->carCommunicationService->sendEmailToMechanicalWorkShop($carId);
        return 201;
    }

}
