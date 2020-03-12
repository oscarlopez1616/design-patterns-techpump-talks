<?php
declare(strict_types=1);

namespace OpenClosedPrinciple\Pattern\NewFeature;


class RestaurantController
{
    /**
     * @var RestaurantRepository
     */
    private $restaurantRepository;

    /**
     * @var PremiumRestaurantRepositoryRepository
     */
    private $premiumRestaurantRepository;

    public function __construct(
        RestaurantRepository $restaurantRepository,
        PremiumRestaurantRepositoryRepository $premiumRestaurantRepository
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
