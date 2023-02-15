<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215102751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cart_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE fav_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE notice_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE product_filter_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cart (id INT NOT NULL, id_user INT NOT NULL, id_service INT DEFAULT NULL, id_product INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE fav (id INT NOT NULL, id_user INT NOT NULL, id_product INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE notice (id INT NOT NULL, rate DOUBLE PRECISION NOT NULL, comment VARCHAR(255) NOT NULL, id_user INT NOT NULL, id_service INT NOT NULL, id_product INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product_filter (id INT NOT NULL, id_product INT NOT NULL, id_filter INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cart_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE fav_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE notice_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE product_filter_id_seq CASCADE');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE fav');
        $this->addSql('DROP TABLE notice');
        $this->addSql('DROP TABLE product_filter');
    }
}
