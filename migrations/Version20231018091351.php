<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231018091351 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD first_mae VARCHAR(150) NOT NULL, DROP pseudo, DROP role, DROP first_name, DROP last_name, DROP is_verified');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD role TINYINT(1) NOT NULL, ADD first_name VARCHAR(150) NOT NULL, ADD last_name VARCHAR(150) NOT NULL, ADD is_verified TINYINT(1) NOT NULL, CHANGE first_mae pseudo VARCHAR(150) NOT NULL');
    }
}
