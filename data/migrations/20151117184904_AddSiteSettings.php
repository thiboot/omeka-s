<?php
namespace Omeka\Db\Migrations;

use Omeka\Db\Migration\AbstractMigration;

class AddSiteSettings extends AbstractMigration
{
    public function up()
    {
        $connection = $this->getConnection();
        $connection->query('CREATE TABLE site_setting (id VARCHAR(190) NOT NULL, site_id INT NOT NULL, value LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_64D05A53F6BD1646 (site_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;');
        $connection->query('ALTER TABLE site_setting ADD CONSTRAINT FK_64D05A53F6BD1646 FOREIGN KEY (site_id) REFERENCES site (id) ON DELETE CASCADE;');
    }
}
