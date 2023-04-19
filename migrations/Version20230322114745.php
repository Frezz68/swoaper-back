<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322114745 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD image_name2 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD image_name3 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD image_name4 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD updated_at2 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD updated_at3 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD updated_at4 TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE product DROP images');
        $this->addSql('COMMENT ON COLUMN product.updated_at2 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN product.updated_at3 IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN product.updated_at4 IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE product ADD images TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE product DROP image_name2');
        $this->addSql('ALTER TABLE product DROP image_name3');
        $this->addSql('ALTER TABLE product DROP image_name4');
        $this->addSql('ALTER TABLE product DROP updated_at2');
        $this->addSql('ALTER TABLE product DROP updated_at3');
        $this->addSql('ALTER TABLE product DROP updated_at4');
        $this->addSql('COMMENT ON COLUMN product.images IS \'(DC2Type:simple_array)\'');
    }
}
