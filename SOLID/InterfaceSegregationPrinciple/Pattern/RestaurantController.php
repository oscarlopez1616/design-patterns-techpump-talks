<?php
declare(strict_types=1);

namespace InterfaceSegregationPrinciple\Pattern;


class RestaurantController
{
    /**
     * @var RestaurantRepository
     */
    private $restaurantRepository;

    /**
     * @var PremiumRestaurantRepositoryRestaurantRepository
     */
    private $premiumRestaurantRepository;

    public function __construct(
        RestaurantRepository $restaurantRepository,
        PremiumRestaurantRepositoryRestaurantRepository $premiumRestaurantRepository
    ) {
        $this->restaurantRepository = $restaurantRepository;
        $this->premiumRestaurantRepository = $premiumRestaurantRepository;
    }


    private function postMakeAnOrder(RestaurantId $restaurantId, bool $isPremiumOrder): int
    {
        if($isPremiumOrder){
            $this->premiumRestaurantRepository->findOrFailById($restaurantId)->makeAPremiumOrder();
        }
        $this->restaurantRepository->findOrFailById($restaurantId)->makeAnOrder();
        return 201;
    }

}