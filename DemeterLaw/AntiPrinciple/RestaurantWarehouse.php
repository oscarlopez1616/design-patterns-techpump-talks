<?php
declare(strict_types=1);

namespace DemeterLaw\AntiPrinciple;

class RestaurantWarehouse
{

    /**
     * @var RestaurantSuppliersService
     */
    private $restaurantSuppliersService;

    public function __construct(RestaurantSuppliersService $restaurantSuppliersService)
    {
        $this->restaurantSuppliersService = $restaurantSuppliersService;
    }

    public function checkAvailability(ProductId $id): bool
    {
        return $this->checkAvailability($id);
    }

}
