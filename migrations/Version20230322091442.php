<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322091442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE product ALTER images TYPE TEXT');
        $this->addSql('ALTER TABLE product RENAME COLUMN path_to_image TO image');
        $this->addSql('COMMENT ON COLUMN product.images IS \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE product DROP updated_at');
        $this->addSql('ALTER TABLE product ALTER images TYPE TEXT');
        $this->addSql('ALTER TABLE product RENAME COLUMN image TO path_to_image');
        $this->addSql('COMMENT ON COLUMN product.images IS \'(DC2Type:array)\'');
    }
}
