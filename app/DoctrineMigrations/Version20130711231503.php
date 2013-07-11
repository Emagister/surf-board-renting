<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130711231503 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "sqlite", "Migration can only be executed safely on 'sqlite'.");
        
        $this->addSql("CREATE TABLE boards (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, description CLOB NOT NULL, weight DOUBLE PRECISION NOT NULL, length DOUBLE PRECISION NOT NULL, width DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "sqlite", "Migration can only be executed safely on 'sqlite'.");
        
        $this->addSql("DROP TABLE boards");
    }
}
