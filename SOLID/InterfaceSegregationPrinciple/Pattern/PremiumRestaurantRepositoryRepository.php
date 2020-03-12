<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;

interface PremiumRestaurantRepositoryRepository
{
    /**
     * @param RestaurantId $restaurantId
     * @return PremiumRestaurant
     */
    public function findOrFailById(RestaurantId $restaurantId): PremiumRestaurant;
}
