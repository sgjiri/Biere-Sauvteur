<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012075227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit_categories (produit_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_93CB7F65F347EFB (produit_id), INDEX IDX_93CB7F65A21214B7 (categories_id), PRIMARY KEY(produit_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit_categories ADD CONSTRAINT FK_93CB7F65F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit_categories ADD CONSTRAINT FK_93CB7F65A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit DROP category_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit_categories DROP FOREIGN KEY FK_93CB7F65F347EFB');
        $this->addSql('ALTER TABLE produit_categories DROP FOREIGN KEY FK_93CB7F65A21214B7');
        $this->addSql('DROP TABLE produit_categories');
        $this->addSql('ALTER TABLE produit ADD category_id INT NOT NULL');
    }
}
