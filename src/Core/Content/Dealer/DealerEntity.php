<?php declare(strict_types=1);

namespace Yireo\ExampleDealersCore\Core\Content\Dealer;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Yireo\ExampleDealersCore\Core\Content\Dealer\Field\TechnicalNameTrait;

/**
 * Class DealerEntity
 * @package Yireo\ExampleDealersCore\Core\Content\Dealer
 */
class DealerEntity extends Entity
{
    use EntityIdTrait;

    use TechnicalNameTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $address;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return (string)$this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}
