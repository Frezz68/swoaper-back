<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308110855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE role_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE product_filter_id_seq CASCADE');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE product_filter');
        $this->addSql('ALTER TABLE cart DROP id_user');
        $this->addSql('ALTER TABLE cart DROP id_service');
        $this->addSql('ALTER TABLE cart DROP id_product');
        $this->addSql('ALTER TABLE fav ADD _user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fav ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fav DROP id_user');
        $this->addSql('ALTER TABLE fav DROP id_product');
        $this->addSql('ALTER TABLE fav ADD CONSTRAINT FK_769BE06FD32632E8 FOREIGN KEY (_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE fav ADD CONSTRAINT FK_769BE06F4584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_769BE06FD32632E8 ON fav (_user_id)');
        $this->addSql('CREATE INDEX IDX_769BE06F4584665A ON fav (product_id)');
        $this->addSql('ALTER TABLE filter ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE filter ADD CONSTRAINT FK_7FC45F1D4584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_7FC45F1D4584665A ON filter (product_id)');
        $this->addSql('ALTER TABLE notice ADD _user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notice ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notice ADD service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notice DROP id_user');
        $this->addSql('ALTER TABLE notice DROP id_service');
        $this->addSql('ALTER TABLE notice DROP id_product');
        $this->addSql('ALTER TABLE notice ADD CONSTRAINT FK_480D45C2D32632E8 FOREIGN KEY (_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE notice ADD CONSTRAINT FK_480D45C24584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE notice ADD CONSTRAINT FK_480D45C2ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_480D45C2D32632E8 ON notice (_user_id)');
        $this->addSql('CREATE INDEX IDX_480D45C24584665A ON notice (product_id)');
        $this->addSql('CREATE INDEX IDX_480D45C2ED5CA9E6 ON notice (service_id)');
        $this->addSql('ALTER TABLE product ADD cart_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD1AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D34A04AD1AD5CDBF ON product (cart_id)');
        $this->addSql('ALTER TABLE service ADD cart_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD21AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_E19D9AD21AD5CDBF ON service (cart_id)');
        $this->addSql('ALTER TABLE "user" ADD cart_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT FK_8D93D6491AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6491AD5CDBF ON "user" (cart_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE role_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE product_filter_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE role (id INT NOT NULL, role_name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product_filter (id INT NOT NULL, id_product INT NOT NULL, id_filter INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE service DROP CONSTRAINT FK_E19D9AD21AD5CDBF');
        $this->addSql('DROP INDEX IDX_E19D9AD21AD5CDBF');
        $this->addSql('ALTER TABLE service DROP cart_id');
        $this->addSql('ALTER TABLE notice DROP CONSTRAINT FK_480D45C2D32632E8');
        $this->addSql('ALTER TABLE notice DROP CONSTRAINT FK_480D45C24584665A');
        $this->addSql('ALTER TABLE notice DROP CONSTRAINT FK_480D45C2ED5CA9E6');
        $this->addSql('DROP INDEX IDX_480D45C2D32632E8');
        $this->addSql('DROP INDEX IDX_480D45C24584665A');
        $this->addSql('DROP INDEX IDX_480D45C2ED5CA9E6');
        $this->addSql('ALTER TABLE notice ADD id_user INT NOT NULL');
        $this->addSql('ALTER TABLE notice ADD id_service INT NOT NULL');
        $this->addSql('ALTER TABLE notice ADD id_product INT NOT NULL');
        $this->addSql('ALTER TABLE notice DROP _user_id');
        $this->addSql('ALTER TABLE notice DROP product_id');
        $this->addSql('ALTER TABLE notice DROP service_id');
        $this->addSql('ALTER TABLE product DROP CONSTRAINT FK_D34A04AD1AD5CDBF');
        $this->addSql('DROP INDEX IDX_D34A04AD1AD5CDBF');
        $this->addSql('ALTER TABLE product DROP cart_id');
        $this->addSql('ALTER TABLE fav DROP CONSTRAINT FK_769BE06FD32632E8');
        $this->addSql('ALTER TABLE fav DROP CONSTRAINT FK_769BE06F4584665A');
        $this->addSql('DROP INDEX IDX_769BE06FD32632E8');
        $this->addSql('DROP INDEX IDX_769BE06F4584665A');
        $this->addSql('ALTER TABLE fav ADD id_user INT NOT NULL');
        $this->addSql('ALTER TABLE fav ADD id_product INT NOT NULL');
        $this->addSql('ALTER TABLE fav DROP _user_id');
        $this->addSql('ALTER TABLE fav DROP product_id');
        $this->addSql('ALTER TABLE cart ADD id_user INT NOT NULL');
        $this->addSql('ALTER TABLE cart ADD id_service INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart ADD id_product INT DEFAULT NULL');
        $this->addSql('ALTER TABLE filter DROP CONSTRAINT FK_7FC45F1D4584665A');
        $this->addSql('DROP INDEX IDX_7FC45F1D4584665A');
        $this->addSql('ALTER TABLE filter DROP product_id');
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT FK_8D93D6491AD5CDBF');
        $this->addSql('DROP INDEX UNIQ_8D93D6491AD5CDBF');
        $this->addSql('ALTER TABLE "user" DROP cart_id');
    }
}
