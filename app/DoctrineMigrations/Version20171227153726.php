<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171227153726 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ext_translations (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(8) NOT NULL, object_class VARCHAR(255) NOT NULL, field VARCHAR(32) NOT NULL, foreign_key VARCHAR(64) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX translations_lookup_idx (locale, object_class, foreign_key), UNIQUE INDEX lookup_unique_idx (locale, object_class, field, foreign_key), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ext_log_entries (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(8) NOT NULL, logged_at DATETIME NOT NULL, object_id VARCHAR(64) DEFAULT NULL, object_class VARCHAR(255) NOT NULL, version INT NOT NULL, data LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', username VARCHAR(255) DEFAULT NULL, INDEX log_class_lookup_idx (object_class), INDEX log_date_lookup_idx (logged_at), INDEX log_user_lookup_idx (username), INDEX log_version_lookup_idx (object_id, object_class, version), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner_translations (id INT AUTO_INCREMENT NOT NULL, object_class INT DEFAULT NULL, locale VARCHAR(8) NOT NULL, field VARCHAR(32) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_579AC5A669684D7D (object_class), UNIQUE INDEX lookup_unique_idx (locale, object_class, field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publish_translations (id INT AUTO_INCREMENT NOT NULL, object_class INT DEFAULT NULL, locale VARCHAR(8) NOT NULL, field VARCHAR(32) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_5DB62C8A69684D7D (object_class), UNIQUE INDEX lookup_unique_idx (locale, object_class, field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_translations (id INT AUTO_INCREMENT NOT NULL, object_class INT DEFAULT NULL, locale VARCHAR(8) NOT NULL, field VARCHAR(32) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_6D8AA75469684D7D (object_class), UNIQUE INDEX lookup_unique_idx (locale, object_class, field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activity_translations (id INT AUTO_INCREMENT NOT NULL, object_class INT DEFAULT NULL, locale VARCHAR(8) NOT NULL, field VARCHAR(32) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_CF0F18C669684D7D (object_class), UNIQUE INDEX lookup_unique_idx (locale, object_class, field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publish (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activity (id INT AUTO_INCREMENT NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE partner_translations ADD CONSTRAINT FK_579AC5A669684D7D FOREIGN KEY (object_class) REFERENCES partner (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publish_translations ADD CONSTRAINT FK_5DB62C8A69684D7D FOREIGN KEY (object_class) REFERENCES publish (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_translations ADD CONSTRAINT FK_6D8AA75469684D7D FOREIGN KEY (object_class) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activity_translations ADD CONSTRAINT FK_CF0F18C669684D7D FOREIGN KEY (object_class) REFERENCES activity (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE post_translations DROP FOREIGN KEY FK_6D8AA75469684D7D');
        $this->addSql('ALTER TABLE partner_translations DROP FOREIGN KEY FK_579AC5A669684D7D');
        $this->addSql('ALTER TABLE publish_translations DROP FOREIGN KEY FK_5DB62C8A69684D7D');
        $this->addSql('ALTER TABLE activity_translations DROP FOREIGN KEY FK_CF0F18C669684D7D');
        $this->addSql('DROP TABLE ext_translations');
        $this->addSql('DROP TABLE ext_log_entries');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE partner');
        $this->addSql('DROP TABLE partner_translations');
        $this->addSql('DROP TABLE publish_translations');
        $this->addSql('DROP TABLE post_translations');
        $this->addSql('DROP TABLE activity_translations');
        $this->addSql('DROP TABLE publish');
        $this->addSql('DROP TABLE activity');
    }
}
