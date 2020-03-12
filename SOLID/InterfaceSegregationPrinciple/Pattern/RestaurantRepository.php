<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;

interface RestaurantRepository
{
    /**
     * @param RestaurantId $restaurantId
     * @return Restaurant
     */
    public function findOrFailById(RestaurantId $restaurantId): Restaurant;
}
