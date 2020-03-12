<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;

interface PremiumRestaurantRepositoryRestaurantRepository
{
    /**
     * @param RestaurantId $restaurantId
     * @return PremiumRestaurant
     */
    public function findOrFailById(RestaurantId $restaurantId): PremiumRestaurant;
}
