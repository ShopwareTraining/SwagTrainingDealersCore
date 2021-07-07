<?php declare(strict_types=1);

namespace SwagTraining\DealersCore\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1609743530 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1609743530;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `dealer` (
    `id` BINARY(16) NOT NULL,
    `name` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `description` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `address` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3),
    PRIMARY KEY (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;
        $connection->executeUpdate($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
