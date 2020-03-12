<?php
declare(strict_types=1);

namespace DemeterLaw\AntiPrinciple;

class Restaurant
{
    /**
     * @var RestaurantWarehouse
     */
    private $restaurantWarehouse;

    /**
     * @var RestaurantSuppliersService
     */
    private $restaurantSuppliersService;

    public function __construct(RestaurantSuppliersService $restaurantSuppliersService)
    {
        $this->restaurantSuppliersService = $restaurantSuppliersService;
    }

    /**
     * @param ProductId $id
     * @throws ProductNotAvailableException
     */
    public function makeAnOrder(ProductId $id): void
    {
        if($this->restaurantSuppliersService->checkAvailability($id)){
            // do something
            return;
        }

        throw new ProductNotAvailableException($id);

    }

}
