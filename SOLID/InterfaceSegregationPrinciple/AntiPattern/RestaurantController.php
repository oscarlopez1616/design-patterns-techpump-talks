<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;


class RestaurantController
{
    /**
     * @var RestaurantRepository
     */
    private $restaurantRepository;

    public function __construct(
        RestaurantRepository $restaurantRepository
    ) {
        $this->restaurantRepository = $restaurantRepository;
    }


    private function postMakeAnOrder(RestaurantId $restaurantId, bool $isPremiumOrder): int
    {
        if($isPremiumOrder){
            $this->restaurantRepository->findOrFailById($restaurantId)->makeAPremiumOrder();
        }
        $this->restaurantRepository->findOrFailById($restaurantId)->makeAnOrder();
        return 201;
    }

}
