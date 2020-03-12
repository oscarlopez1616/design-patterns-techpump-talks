<?php
declare(strict_types=1);

namespace DemeterLaw\Principle;

class Restaurant
{
    /**
     * @var RestaurantWarehouse
     */
    private $restaurantWarehouse;


    public function __construct()
    {
    }

    /**
     * @param ProductId $id
     * @throws ProductNotAvailableException
     */
    public function makeAnOrder(ProductId $id): void
    {
        if($this->restaurantWarehouse->checkAvailability($id)){
            // do something
            return;
        }

        throw new ProductNotAvailableException($id);

    }

}
