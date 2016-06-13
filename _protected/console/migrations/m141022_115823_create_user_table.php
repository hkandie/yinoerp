<?php

use yii\db\Migration;

class m141022_115823_create_user_table extends Migration {

    public function up() {


        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('_dates', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%_dates}}', [
                    'd' => 'DATE NOT NULL',
                    0 => 'PRIMARY KEY (`d`)',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('_profile', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%_profile}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'INT(11) NOT NULL',
                    'create_time' => 'TIMESTAMP NULL',
                    'update_time' => 'TIMESTAMP NULL',
                    'first_name' => 'VARCHAR(255) NULL',
                    'last_name' => 'VARCHAR(255) NULL',
                    'gender' => 'VARCHAR(255) NULL',
                    'level' => 'VARCHAR(2) NULL',
                    'phone' => 'VARCHAR(12) NULL',
                    'mobile' => 'VARCHAR(12) NULL',
                    'bill_code' => 'INT(11) NULL DEFAULT \'0\'',
                    'note' => 'TEXT NULL',
                    'avatar' => 'VARCHAR(100) NULL',
                    'page_size' => 'INT(11) NULL DEFAULT \'20\'',
                    'notifications' => 'VARCHAR(12) NULL',
                    'company_id' => 'INT(11) NULL DEFAULT \'20\'',
                    'dept_id' => 'INT(11) NULL DEFAULT \'0\'',
                    'active' => 'INT(11) NULL DEFAULT \'20\'',
                    'load_cost' => 'DOUBLE(12,2) NULL DEFAULT \'0\'',
                    'seat_charge' => 'DOUBLE(12,2) NULL DEFAULT \'0\'',
                    'daily_hours' => 'DOUBLE(12,2) NULL DEFAULT \'0\'',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('_role', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%_role}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'name' => 'VARCHAR(255) NOT NULL',
                    'create_time' => 'TIMESTAMP NULL',
                    'update_time' => 'TIMESTAMP NULL',
                    'can_admin' => 'SMALLINT(6) NOT NULL DEFAULT \'0\'',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('_user_auth', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%_user_auth}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'INT(11) NOT NULL',
                    'provider' => 'VARCHAR(255) NOT NULL',
                    'provider_id' => 'VARCHAR(255) NOT NULL',
                    'provider_attributes' => 'TEXT NOT NULL',
                    'create_time' => 'TIMESTAMP NULL',
                    'update_time' => 'TIMESTAMP NULL',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('_user_key', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%_user_key}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'INT(11) NOT NULL',
                    'type' => 'SMALLINT(6) NOT NULL',
                    'key_value' => 'VARCHAR(255) NOT NULL',
                    'create_time' => 'TIMESTAMP NULL',
                    'consume_time' => 'TIMESTAMP NULL',
                    'expire_time' => 'TIMESTAMP NULL',
                        ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        

        /* MYSQL */
        if (!in_array('users', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%users}}', [
                    'user_id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`user_id`)',
                    'role_id' => 'INT(11) NOT NULL',
                    'status' => 'SMALLINT(6) NOT NULL',
                    'email' => 'VARCHAR(127) NOT NULL',
                    'new_email' => 'VARCHAR(255) NULL',
                    'username' => 'VARCHAR(255) NULL',
                    'password' => 'VARCHAR(255) NULL',
                    'auth_key' => 'VARCHAR(255) NULL',
                    'api_key' => 'VARCHAR(255) NULL',
                    'login_ip' => 'VARCHAR(255) NULL',
                    'login_time' => 'TIMESTAMP NULL',
                    'create_ip' => 'VARCHAR(255) NULL',
                    'created_at' => 'TIMESTAMP NULL',
                    'updated_at' => 'TIMESTAMP NULL',
                    'ban_time' => 'TIMESTAMP NULL',
                    'ban_reason' => 'VARCHAR(255) NULL',
                    'created_by' => 'INT(11) NULL DEFAULT \'1\'',
                    'updated_by' => 'INT(11) NULL DEFAULT \'1\'',
                    'user_type' => 'VARCHAR(2) NULL',
                        ], $tableOptions_mysql);
            }
        }
       


        $this->createIndex('idx_user_id_9197_00', '_profile', 'user_id', 0);
        $this->createIndex('idx_provider_id_9772_01', '_user_auth', 'provider_id', 0);
        $this->createIndex('idx_user_id_9772_02', '_user_auth', 'user_id', 0);
        $this->createIndex('idx_UNIQUE_key_value_9977_03', '_user_key', 'key_value', 1);
        $this->createIndex('idx_user_id_9978_04', '_user_key', 'user_id', 0);
        $this->createIndex('idx_UNIQUE_email_0215_05', 'users', 'email', 1);
        $this->createIndex('idx_UNIQUE_username_0215_06', 'users', 'username', 1);
        $this->createIndex('idx_role_id_0216_07', 'users', 'role_id', 0);

        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_users_9177_00', '{{%_profile}}', 'user_id', '{{%users}}', 'user_id', 'CASCADE', 'NO ACTION');
        $this->addForeignKey('fk_users_9753_01', '{{%_user_auth}}', 'user_id', '{{%users}}', 'user_id', 'CASCADE', 'NO ACTION');
        $this->addForeignKey('fk_users_9955_02', '{{%_user_key}}', 'user_id', '{{%users}}', 'user_id', 'CASCADE', 'NO ACTION');
        $this->addForeignKey('fk__role_0193_03', '{{%users}}', 'role_id', '{{%_role}}', 'id', 'CASCADE', 'NO ACTION');
        $this->execute('SET foreign_key_checks = 1;');

        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%_profile}}', ['id' => '1', 'user_id' => '1', 'create_time' => '2015-09-28 09:34:53', 'update_time' => '', 'first_name' => 'Hosea', 'last_name' => 'Kandie', 'gender' => '', 'level' => '', 'phone' => '', 'mobile' => '', 'bill_code' => '0', 'note' => '', 'avatar' => '', 'page_size' => '20', 'notifications' => '', 'company_id' => '20', 'dept_id' => '0', 'active' => '20', 'load_cost' => '0.00', 'seat_charge' => '0.00', 'daily_hours' => '0.00']);
        $this->insert('{{%_role}}', ['id' => '1', 'name' => 'Admin', 'create_time' => '2015-09-28 09:34:53', 'update_time' => '', 'can_admin' => '1']);
        $this->insert('{{%_role}}', ['id' => '2', 'name' => 'User', 'create_time' => '2015-09-28 09:34:53', 'update_time' => '', 'can_admin' => '0']);
        $this->insert('{{%_user_key}}', ['id' => '1', 'user_id' => '1', 'type' => '3', 'key_value' => 'U7jcaPyyxhhWwDBgAvjeICOmH-O9l9TZ', 'create_time' => '2015-09-29 07:09:53', 'consume_time' => '2015-09-29 07:28:41', 'expire_time' => '2015-10-01 07:09:53']);
        $this->insert('{{%users}}', ['user_id' => '1', 'role_id' => '1', 'status' => '1', 'email' => 'zeddarn@gmail.com', 'new_email' => '', 'username' => 'zeddarn', 'password' => '$2y$13$samflcZmft1dtsft/QifEOdKZU9CYiPRk1HRz5adfG5/VYkVf469e', 'auth_key' => '', 'api_key' => '', 'login_ip' => '::1', 'login_time' => '2016-06-11 10:05:54', 'create_ip' => '', 'created_at' => '', 'updated_at' => '2016-06-09 10:15:12', 'ban_time' => '', 'ban_reason' => '', 'created_by' => '1', 'updated_by' => '1', 'user_type' => 'A']);
        $this->execute('SET foreign_key_checks = 1;');



        $this->createIndex('idx_provider_id_1107_00', '_user_auth', 'provider_id', 0);
        $this->createIndex('idx_user_id_1108_01', '_user_auth', 'user_id', 0);

        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_users_1085_00', '{{%_user_auth}}', 'user_id', '{{%users}}', 'user_id', 'CASCADE', 'NO ACTION');
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down() {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `_user_auth`');
        $this->execute('DROP TABLE IF EXISTS `_profile`');
        $this->execute('DROP TABLE IF EXISTS `users`');
        $this->execute('DROP TABLE IF EXISTS `_user_key`');
        $this->execute('DROP TABLE IF EXISTS `_dates`');
        $this->execute('DROP TABLE IF EXISTS `_role`');
        $this->execute('SET foreign_key_checks = 1;');
    }

}
