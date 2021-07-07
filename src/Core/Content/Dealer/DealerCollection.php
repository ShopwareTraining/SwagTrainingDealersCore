<?php declare(strict_types=1);

namespace SwagTraining\DealersCore\Core\Content\Dealer;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * Class DealerCollection
 * @package SwagTraining\DealersCore\Core\Content\Dealer
 */
class DealerCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DealerEntity::class;
    }
}