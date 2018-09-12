<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180901192234 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE servicio CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE oficio ADD servicio_id INT NOT NULL');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF1671CAA3E7 FOREIGN KEY (servicio_id) REFERENCES servicio (id)');
        $this->addSql('CREATE INDEX IDX_3B9FFF1671CAA3E7 ON oficio (servicio_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF1671CAA3E7');
        $this->addSql('DROP INDEX IDX_3B9FFF1671CAA3E7 ON oficio');
        $this->addSql('ALTER TABLE oficio DROP servicio_id');
        $this->addSql('ALTER TABLE servicio MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE servicio DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE servicio CHANGE id id INT NOT NULL');
    }
}
