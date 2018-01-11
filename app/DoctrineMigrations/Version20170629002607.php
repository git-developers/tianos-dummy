<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170629002607 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client_has_point_of_sale RENAME INDEX fk_client_has_point_of_sale_client1_idx TO IDX_7F152FEC19EB6921');
        $this->addSql('ALTER TABLE client_has_point_of_sale RENAME INDEX fk_client_has_point_of_sale_point_of_sale1_idx TO IDX_7F152FEC6B7E9A73');
        $this->addSql('ALTER TABLE product MODIFY id_increment INT NOT NULL');
        $this->addSql('ALTER TABLE product DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE product CHANGE id_increment id_increment INT NOT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D34A04AD12469DE2 ON product (category_id)');
        $this->addSql('ALTER TABLE product ADD PRIMARY KEY (id_increment)');
        $this->addSql('ALTER TABLE point_of_sale_has_product CHANGE id_increment id_increment INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE category CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE group_of_users_has_user RENAME INDEX fk_group_of_users_has_user_group_of_users1_idx TO IDX_6838269DFE905D17');
        $this->addSql('ALTER TABLE group_of_users_has_user RENAME INDEX fk_group_of_users_has_user_user1_idx TO IDX_6838269DA76ED395');
        $this->addSql('ALTER TABLE user_has_files RENAME INDEX fk_user_has_files_user1_idx TO IDX_FD5CDD03A76ED395');
        $this->addSql('ALTER TABLE user_has_files RENAME INDEX fk_user_has_files_files1_idx TO IDX_FD5CDD03A3E65B2F');
        $this->addSql('ALTER TABLE user_has_point_of_sale DROP description');
        $this->addSql('ALTER TABLE user_has_point_of_sale RENAME INDEX fk_user_has_point_of_sale_user1_idx TO IDX_AD4176D6A76ED395');
        $this->addSql('ALTER TABLE user_has_point_of_sale RENAME INDEX fk_user_has_point_of_sale_point_of_sale1_idx TO IDX_AD4176D66B7E9A73');
        $this->addSql('ALTER TABLE profile_has_role RENAME INDEX fk_profile_has_role_profile1_idx TO IDX_F35F3084CCFA12B8');
        $this->addSql('ALTER TABLE profile_has_role RENAME INDEX fk_profile_has_role_role1_idx TO IDX_F35F3084D60322AC');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE client_has_point_of_sale RENAME INDEX idx_7f152fec6b7e9a73 TO fk_client_has_point_of_sale_point_of_sale1_idx');
        $this->addSql('ALTER TABLE client_has_point_of_sale RENAME INDEX idx_7f152fec19eb6921 TO fk_client_has_point_of_sale_client1_idx');
        $this->addSql('ALTER TABLE group_of_users_has_user RENAME INDEX idx_6838269da76ed395 TO fk_group_of_users_has_user_user1_idx');
        $this->addSql('ALTER TABLE group_of_users_has_user RENAME INDEX idx_6838269dfe905d17 TO fk_group_of_users_has_user_group_of_users1_idx');
        $this->addSql('ALTER TABLE point_of_sale_has_product CHANGE id_increment id_increment INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_D34A04AD12469DE2 ON product');
        $this->addSql('ALTER TABLE product DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE product CHANGE id_increment id_increment INT AUTO_INCREMENT NOT NULL, CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD PRIMARY KEY (id_increment, category_id)');
        $this->addSql('ALTER TABLE profile_has_role RENAME INDEX idx_f35f3084d60322ac TO fk_profile_has_role_role1_idx');
        $this->addSql('ALTER TABLE profile_has_role RENAME INDEX idx_f35f3084ccfa12b8 TO fk_profile_has_role_profile1_idx');
        $this->addSql('ALTER TABLE user_has_files RENAME INDEX idx_fd5cdd03a3e65b2f TO fk_user_has_files_files1_idx');
        $this->addSql('ALTER TABLE user_has_files RENAME INDEX idx_fd5cdd03a76ed395 TO fk_user_has_files_user1_idx');
        $this->addSql('ALTER TABLE user_has_point_of_sale ADD description TEXT DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE user_has_point_of_sale RENAME INDEX idx_ad4176d66b7e9a73 TO fk_user_has_point_of_sale_point_of_sale1_idx');
        $this->addSql('ALTER TABLE user_has_point_of_sale RENAME INDEX idx_ad4176d6a76ed395 TO fk_user_has_point_of_sale_user1_idx');
    }
}
