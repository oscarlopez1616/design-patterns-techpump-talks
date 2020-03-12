<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\AntiPattern\Initial;


class RestaurantController
{
    /**
     * @var RestaurantRepository
     */
    private $restaurantRepository;

    public function __construct(RestaurantRepository $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    private function postMakeAnOrder(RestaurantId $restaurantId): int
    {
        $this->restaurantRepository->findOrFailById($restaurantId)->makeAnOrder();
        return 201;
    }
}
