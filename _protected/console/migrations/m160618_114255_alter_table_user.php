<?php

use yii\db\Migration;

class m160618_114255_alter_table_user extends Migration {

    public function up() {

        //$this->addColumn("_profile", "assigned_ip", "string(256) DEFAULT NULL");
        $this->addColumn("_profile", "user_language", "string(20) DEFAULT NULL");
        $this->addColumn("_profile", "date_format", "integer(1) NOT NULL DEFAULT '0'");
        $this->addColumn("_profile", "hr_employee_id", "integer(12) DEFAULT NULL");
        $this->addColumn("_profile", "block_notif_count", "integer(5) DEFAULT NULL");
        $this->addColumn("_profile", "supplier_id", "integer(12) DEFAULT NULL");
        $this->addColumn("_profile", "default_theme", "string(50) DEFAULT NULL");
        $this->addColumn("_profile", "use_personal_db_cb", "integer(1) DEFAULT NULL");
        $this->addColumn("_profile", "ar_customer_id", "integer(12) DEFAULT NULL");
        $this->addColumn("_profile", "prices_dec", "integer(6) NOT NULL DEFAULT '2'");
        $this->addColumn("_profile", "qty_dec", "integer(6) NOT NULL DEFAULT '2'");
        $this->addColumn("_profile", "rates_dec", "integer(6) NOT NULL DEFAULT '4'");
        $this->addColumn("_profile", "percent_dec", "integer(6) NOT NULL DEFAULT '1'");
        $this->addColumn("_profile", "show_gl", "integer(1) NOT NULL DEFAULT '1'");
        $this->addColumn("_profile", "show_codes", "integer(1) NOT NULL DEFAULT '0'");
        $this->addColumn("_profile", "show_hints", "integer(1) NOT NULL DEFAULT '0'");
        $this->addColumn("_profile", "last_visit_date", "datetime DEFAULT NULL");
        $this->addColumn("_profile", "query_size", "integer(1) DEFAULT '10'");
        $this->addColumn("_profile", "image_file_id", "integer(12) DEFAULT NULL");
        $this->addColumn("_profile", "pos", "integer(6) DEFAULT '1'");
        $this->addColumn("_profile", "print_profile", "string(30) NOT NULL DEFAULT '1'");
        $this->addColumn("_profile", "rep_popup", "integer(1) DEFAULT '1'");
        $this->addColumn("_profile", "auth_provider_name", "string(255) DEFAULT NULL");
        $this->addColumn("_profile", "auth_provider_id", "string(255) DEFAULT NULL");
        $this->addColumn("_profile", "status", "integer(1) NOT NULL DEFAULT '1'");
        $this->addColumn("_profile", "created_by", "integer(12) NOT NULL");
        $this->addColumn("_profile", "creation_date", "datetime DEFAULT NULL");
        $this->addColumn("_profile", "last_update_by", "integer(12) NOT NULL");
        $this->addColumn("_profile", "last_update_date", "datetime DEFAULT NULL");
        $this->addColumn("_profile", "revision_enabled", "char(1) DEFAULT 'N'");
        $this->addColumn("_profile", "revision_number", "integer(11) DEFAULT NULL");
    }

    public function down() {
        echo "m160618_114255_alter_table_user cannot be reverted.\n";
       // $this->dropColumn("_profile", "assigned_ip");
        //$this->dropColumn("_profile", "phone");
        $this->dropColumn("_profile", "user_language");
        $this->dropColumn("_profile", "date_format");
        $this->dropColumn("_profile", "hr_employee_id");
        $this->dropColumn("_profile", "block_notif_count");
        $this->dropColumn("_profile", "supplier_id");
        $this->dropColumn("_profile", "default_theme");
        $this->dropColumn("_profile", "use_personal_db_cb");
        $this->dropColumn("_profile", "ar_customer_id");
        $this->dropColumn("_profile", "prices_dec");
        $this->dropColumn("_profile", "qty_dec");
        $this->dropColumn("_profile", "rates_dec");
        $this->dropColumn("_profile", "percent_dec");
        $this->dropColumn("_profile", "show_gl");
        $this->dropColumn("_profile", "show_codes");
        $this->dropColumn("_profile", "show_hints");
        $this->dropColumn("_profile", "last_visit_date");
        $this->dropColumn("_profile", "query_size");
        $this->dropColumn("_profile", "image_file_id");
        $this->dropColumn("_profile", "pos");
        $this->dropColumn("_profile", "print_profile");
        $this->dropColumn("_profile", "rep_popup");
        $this->dropColumn("_profile", "auth_provider_name");
        $this->dropColumn("_profile", "auth_provider_id");
        $this->dropColumn("_profile", "status");
        $this->dropColumn("_profile", "created_by");
        $this->dropColumn("_profile", "creation_date");
        $this->dropColumn("_profile", "last_update_by");
        $this->dropColumn("_profile", "last_update_date");
        $this->dropColumn("_profile", "revision_enabled");
        $this->dropColumn("_profile", "revision_number");
        return false;
    }

    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}
