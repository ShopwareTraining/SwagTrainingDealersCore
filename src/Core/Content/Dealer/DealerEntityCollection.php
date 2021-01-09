<?php declare(strict_types=1);

namespace Yireo\ExampleDealersCore\Core\Content\Dealer;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * Class DealerEntityCollection
 * @package Yireo\ExampleDealersCore\Core\Content\Dealer
 */
class DealerEntityCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DealerEntity::class;
    }
}