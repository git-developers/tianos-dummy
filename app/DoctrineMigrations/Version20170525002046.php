<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170525002046 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE grades MODIFY id_increment INT NOT NULL');
        $this->addSql('ALTER TABLE grades DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE grades CHANGE id_increment id_increment INT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3AE3611074EE754E ON grades (user_has_courses_id)');
        $this->addSql('ALTER TABLE grades ADD PRIMARY KEY (id_increment)');
        $this->addSql('ALTER TABLE attendance MODIFY id_increment INT NOT NULL');
        $this->addSql('ALTER TABLE attendance DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE attendance CHANGE id_increment id_increment INT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6DE30D9174EE754E ON attendance (user_has_courses_id)');
        $this->addSql('ALTER TABLE attendance ADD PRIMARY KEY (id_increment)');
        $this->addSql('ALTER TABLE task MODIFY id_increment INT NOT NULL');
        $this->addSql('ALTER TABLE task DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE task CHANGE id_increment id_increment INT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_527EDB2574EE754E ON task (user_has_courses_id)');
        $this->addSql('ALTER TABLE task ADD PRIMARY KEY (id_increment)');
        $this->addSql('ALTER TABLE communication MODIFY id_increment INT NOT NULL');
        $this->addSql('ALTER TABLE communication DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE communication CHANGE id_increment id_increment INT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F9AFB5EB74EE754E ON communication (user_has_courses_id)');
        $this->addSql('ALTER TABLE communication ADD PRIMARY KEY (id_increment)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_6DE30D9174EE754E ON attendance');
        $this->addSql('ALTER TABLE attendance DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE attendance CHANGE id_increment id_increment INT AUTO_INCREMENT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT NOT NULL');
        $this->addSql('ALTER TABLE attendance ADD PRIMARY KEY (id_increment, user_has_courses_id)');
        $this->addSql('DROP INDEX UNIQ_F9AFB5EB74EE754E ON communication');
        $this->addSql('ALTER TABLE communication DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE communication CHANGE id_increment id_increment INT AUTO_INCREMENT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT NOT NULL');
        $this->addSql('ALTER TABLE communication ADD PRIMARY KEY (id_increment, user_has_courses_id)');
        $this->addSql('DROP INDEX UNIQ_3AE3611074EE754E ON grades');
        $this->addSql('ALTER TABLE grades DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE grades CHANGE id_increment id_increment INT AUTO_INCREMENT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT NOT NULL');
        $this->addSql('ALTER TABLE grades ADD PRIMARY KEY (id_increment, user_has_courses_id)');
        $this->addSql('DROP INDEX UNIQ_527EDB2574EE754E ON task');
        $this->addSql('ALTER TABLE task DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE task CHANGE id_increment id_increment INT AUTO_INCREMENT NOT NULL, CHANGE user_has_courses_id user_has_courses_id INT NOT NULL');
        $this->addSql('ALTER TABLE task ADD PRIMARY KEY (id_increment, user_has_courses_id)');
    }
}
