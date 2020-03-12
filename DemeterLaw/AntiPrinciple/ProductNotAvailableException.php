<?php
declare(strict_types=1);

namespace DemeterLaw\AntiPrinciple;

use Exception;

class ProductNotAvailableException extends Exception
{

    public function __construct(ProductId $id)
    {
        parent::__construct();
    }
}
