<?php declare(strict_types=1);

namespace Yireo\ExampleDealersCore\Core\Content\Dealer;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

/**
 * Class DealerDefinition
 * @package Yireo\ExampleDealersCore\Core\Content\Dealer
 */
class DealerDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'dealer';

    /**
     * @return string
     */
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    /**
     * @return string
     */
    public function getEntityClass(): string
    {
        return DealerEntity::class;
    }

    /**
     * @return string
     */
    public function getCollectionClass(): string
    {
        return DealerCollection::class;
    }

    /**
     * @return FieldCollection
     */
    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            new StringField('name', 'name'),
            new StringField('description', 'description'),
            new StringField('address', 'address'),
            new CreatedAtField(),
            new UpdatedAtField(),
        ]);
    }
}