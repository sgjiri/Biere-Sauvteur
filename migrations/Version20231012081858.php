<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012081858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_order ADD order_id_id INT NOT NULL, ADD product_id_id INT NOT NULL, DROP order_id, DROP product_id');
        $this->addSql('ALTER TABLE detail_order ADD CONSTRAINT FK_88D958C1FCDAEAAA FOREIGN KEY (order_id_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE detail_order ADD CONSTRAINT FK_88D958C1DE18E50B FOREIGN KEY (product_id_id) REFERENCES produit (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88D958C1FCDAEAAA ON detail_order (order_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88D958C1DE18E50B ON detail_order (product_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_order DROP FOREIGN KEY FK_88D958C1FCDAEAAA');
        $this->addSql('ALTER TABLE detail_order DROP FOREIGN KEY FK_88D958C1DE18E50B');
        $this->addSql('DROP INDEX UNIQ_88D958C1FCDAEAAA ON detail_order');
        $this->addSql('DROP INDEX UNIQ_88D958C1DE18E50B ON detail_order');
        $this->addSql('ALTER TABLE detail_order ADD order_id INT NOT NULL, ADD product_id INT NOT NULL, DROP order_id_id, DROP product_id_id');
    }
}
