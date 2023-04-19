<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322082540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE filter ALTER filter_size DROP NOT NULL');
        $this->addSql('ALTER TABLE filter ALTER mark DROP NOT NULL');
        $this->addSql('ALTER TABLE notice ALTER rate DROP NOT NULL');
        $this->addSql('ALTER TABLE notice ALTER comment DROP NOT NULL');
        $this->addSql('ALTER TABLE product ALTER price DROP NOT NULL');
        $this->addSql('ALTER TABLE product ALTER product_name DROP NOT NULL');
        $this->addSql('ALTER TABLE product ALTER about DROP NOT NULL');
        $this->addSql('ALTER TABLE product ALTER path_to_image DROP NOT NULL');
        $this->addSql('ALTER TABLE product ALTER images DROP NOT NULL');
        $this->addSql('ALTER TABLE product ALTER size DROP NOT NULL');
        $this->addSql('ALTER TABLE promo ALTER code_promo DROP NOT NULL');
        $this->addSql('ALTER TABLE promo ALTER value_promo DROP NOT NULL');
        $this->addSql('ALTER TABLE service ALTER name DROP NOT NULL');
        $this->addSql('ALTER TABLE service ALTER name_service DROP NOT NULL');
        $this->addSql('ALTER TABLE service ALTER price DROP NOT NULL');
        $this->addSql('ALTER TABLE service ALTER about DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER email DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER roles DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER first_name DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER last_name DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE product ALTER price SET NOT NULL');
        $this->addSql('ALTER TABLE product ALTER product_name SET NOT NULL');
        $this->addSql('ALTER TABLE product ALTER about SET NOT NULL');
        $this->addSql('ALTER TABLE product ALTER path_to_image SET NOT NULL');
        $this->addSql('ALTER TABLE product ALTER images SET NOT NULL');
        $this->addSql('ALTER TABLE product ALTER size SET NOT NULL');
        $this->addSql('ALTER TABLE notice ALTER rate SET NOT NULL');
        $this->addSql('ALTER TABLE notice ALTER comment SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER email SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER roles SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER first_name SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER last_name SET NOT NULL');
        $this->addSql('ALTER TABLE service ALTER name SET NOT NULL');
        $this->addSql('ALTER TABLE service ALTER name_service SET NOT NULL');
        $this->addSql('ALTER TABLE service ALTER price SET NOT NULL');
        $this->addSql('ALTER TABLE service ALTER about SET NOT NULL');
        $this->addSql('ALTER TABLE promo ALTER code_promo SET NOT NULL');
        $this->addSql('ALTER TABLE promo ALTER value_promo SET NOT NULL');
        $this->addSql('ALTER TABLE filter ALTER filter_size SET NOT NULL');
        $this->addSql('ALTER TABLE filter ALTER mark SET NOT NULL');
    }
}
