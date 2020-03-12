<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\Pattern\NewFeature;

interface RestaurantRepository
{
    /**
     * @param RestaurantId $restaurantId
     * @return Restaurant
     */
    public function findOrFailById(RestaurantId $restaurantId): Restaurant;
}
