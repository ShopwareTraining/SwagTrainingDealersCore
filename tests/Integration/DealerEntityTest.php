<?php declare(strict_types=1);

namespace Yireo\ExampleDealersCore\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Shopware\Core\Framework\Uuid\Uuid;
use Yireo\ExampleDealersCore\Entity\DealerEntity;

class DealerEntityTest extends TestCase
{
    use IntegrationTestBehaviour;

    public function testRepository()
    {
        /** @var EntityRepositoryInterface $dealerRepository */
        $dealerRepository = $this->getContainer()->get('dealer_entity.repository');

        $dealerRepository->create([[
            'id' => Uuid::randomHex(),
            'name' => 'Batman',
            'description' => 'Dark knight',
            'label' => 'Bat cave, Gotham',
        ]], Context::createDefaultContext());

        $dealers = $dealerRepository->search(
            (new Criteria())->addFilter(new EqualsFilter('name', 'Batman')),
            Context::createDefaultContext()
        )->getEntities();
        $this->assertNotEmpty($dealers);
        $this->assertTrue($dealers->count() === 1);

        $dealer = $dealers->first();
        $this->assertInstanceOf(DealerEntity::class, $dealer);
        $this->assertEquals('Batman', $dealer->getName());
        $this->assertEquals('Dark knight', $dealer->getDescription());
    }
}
