<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190620175400 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE chapter_one DROP FOREIGN KEY FK_5286984FA44FCB08');
        $this->addSql('DROP TABLE chapters');
        $this->addSql('DROP INDEX IDX_5286984FA44FCB08 ON chapter_one');
        $this->addSql('ALTER TABLE chapter_one DROP chapters_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE chapters (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE chapter_one ADD chapters_id INT NOT NULL');
        $this->addSql('ALTER TABLE chapter_one ADD CONSTRAINT FK_5286984FA44FCB08 FOREIGN KEY (chapters_id) REFERENCES chapters (id)');
        $this->addSql('CREATE INDEX IDX_5286984FA44FCB08 ON chapter_one (chapters_id)');
    }
}
