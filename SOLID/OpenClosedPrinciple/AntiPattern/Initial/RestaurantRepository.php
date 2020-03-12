<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\AntiPattern\Initial;

interface RestaurantRepository
{
    public function findOrFailById(RestaurantId $restaurantId): Restaurant;
}
