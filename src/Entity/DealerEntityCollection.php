<?php declare(strict_types=1);

namespace Yireo\ExampleDealersCore\Entity;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class DealerEntityCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return DealerEntity::class;
    }
}