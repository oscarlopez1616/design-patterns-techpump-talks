<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\Pattern\NewFeature;

interface PremiumRestaurantRepositoryRepository
{
    /**
     * @param RestaurantId $restaurantId
     * @return PremiumRestaurant
     */
    public function findOrFailById(RestaurantId $restaurantId): PremiumRestaurant;
}
