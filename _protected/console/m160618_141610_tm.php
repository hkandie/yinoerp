<?php

use yii\db\Migration;

class m160618_141610_tm extends Migration {

    public function up() {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        if (!in_array('tm_cargo', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%tm_cargo}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'VARCHAR(20) NULL DEFAULT \'1\'',
                    'cargo_id' => 'VARCHAR(20) NULL DEFAULT \'1\'',
                    'from_company' => 'VARCHAR(20) NOT NULL',
                    'from_street' => 'VARCHAR(15) NOT NULL',
                    'from_address_nr' => 'INT(10) NOT NULL',
                    'from_zipcode' => 'VARCHAR(10) NOT NULL',
                    'from_city' => 'TEXT NULL',
                    'from_state' => 'VARCHAR(20) NOT NULL',
                    'from_country' => 'TEXT NULL',
                    'to_company' => 'VARCHAR(20) NOT NULL',
                    'to_street' => 'VARCHAR(20) NOT NULL',
                    'to_address_nr' => 'INT(10) NOT NULL',
                    'to_zipcode' => 'VARCHAR(15) NOT NULL',
                    'to_city' => 'TEXT NULL',
                    'to_state' => 'VARCHAR(20) NOT NULL',
                    'to_country' => 'TEXT NULL',
                    'arrival_date' => 'DATE NULL',
                    'price' => 'DECIMAL(9,2) NULL',
                    'currency' => 'VARCHAR(30) NULL',
                    'cargo_type' => 'TEXT NULL',
                    'transport_type' => 'TEXT NULL',
                    'weight' => 'TEXT NULL',
                    'volume' => 'TEXT NULL',
                    'length' => 'VARCHAR(20) NULL',
                    'height' => 'VARCHAR(20) NULL',
                    'width' => 'VARCHAR(20) NULL',
                    'size' => 'INT(11) NULL',
                    'description' => 'TEXT NULL',
                    'physical_state' => 'VARCHAR(30) NOT NULL',
                    'notes' => 'TEXT NULL',
                    'tx_date' => 'DATETIME NULL',
                    'weight_unit' => 'VARCHAR(50) NULL',
                    'volume_unit' => 'VARCHAR(50) NULL',
                    'length_unit' => 'VARCHAR(50) NULL',
                    'height_unit' => 'VARCHAR(50) NULL',
                    'width_unit' => 'VARCHAR(50) NULL',
                    'size_unit' => 'VARCHAR(50) NULL',
                    'image_file_id' => 'INT(11) NULL',
                    'attach_id_values' => 'VARCHAR(100) NULL',
                    'company_id' => 'INT(11) NOT NULL DEFAULT \'0\'',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('tm_obc', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%tm_obc}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'startshipping_date' => 'DATE NULL',
                    'endshipping_date' => 'DATE NULL',
                    'from_airport' => 'TEXT NULL',
                    'from_city' => 'TEXT NULL',
                    'from_country' => 'TEXT NULL',
                    'to_airport' => 'TEXT NULL',
                    'to_city' => 'TEXT NULL',
                    'to_country' => 'TEXT NULL',
                    'courier_name' => 'VARCHAR(15) NULL',
                    'user_name' => 'VARCHAR(15) NULL',
                    'weight' => 'INT(10) NULL',
                    'volume' => 'INT(10) NULL',
                    'airliner' => 'VARCHAR(200) NULL',
                    'flight_number' => 'VARCHAR(100) NULL',
                    'cargo_type' => 'VARCHAR(200) NULL',
                    'tx_date' => 'DATETIME NULL',
                    'price' => 'DOUBLE(18,2) NOT NULL DEFAULT \'0\'',
                    'package_type' => 'INT(11) NOT NULL DEFAULT \'0\'',
                    'currency' => 'VARCHAR(3) NOT NULL DEFAULT \'\'',
                    'obc_id' => 'VARCHAR(30) NOT NULL',
                    'company_id' => 'INT(11) NOT NULL DEFAULT \'0\'',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('tm_transport', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%tm_transport}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'VARCHAR(20) NULL DEFAULT \'1\'',
                    'departure_date' => 'DATE NOT NULL',
                    'arrival_date' => 'DATE NOT NULL',
                    'startshipping_date' => 'DATE NOT NULL',
                    'endshipping_date' => 'DATE NOT NULL',
                    'from_city' => 'TEXT NULL',
                    'from_country' => 'TEXT NULL',
                    'to_city' => 'TEXT NULL',
                    'to_country' => 'TEXT NULL',
                    'price' => 'DECIMAL(9,2) NULL',
                    'currency' => 'VARCHAR(30) NULL',
                    'transport_type' => 'TEXT NULL',
                    'container_type' => 'TEXT NOT NULL',
                    'weight' => 'TEXT NULL',
                    'volume' => 'TEXT NULL',
                    'length' => 'VARCHAR(20) NULL',
                    'height' => 'VARCHAR(20) NULL',
                    'width' => 'VARCHAR(20) NULL',
                    'airfreight_security' => 'TEXT NOT NULL',
                    'shipper' => 'TEXT NOT NULL',
                    'description' => 'TEXT NULL',
                    'notes' => 'TEXT NOT NULL',
                    'tx_date' => 'DATETIME NULL',
                    'transport_ID' => 'TEXT NOT NULL',
                    'awb' => 'TEXT NULL',
                    'airfreight_security_type' => 'VARCHAR(50) NULL',
                    'company_id' => 'INT(11) NOT NULL DEFAULT \'0\'',
                        ], $tableOptions_mysql);
            }
        }
    }

    public function down() {
        echo "m160618_141610_tm cannot be reverted.\n";

        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `tm_cargo`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `tm_obc`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `tm_transport`');
        $this->execute('SET foreign_key_checks = 1;');
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
