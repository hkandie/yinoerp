<?php

use yii\db\Migration;

class m160611_095237_first_600 extends Migration
{
    public function up()
    {
$tables = Yii::$app->db->schema->getTableNames();
$dbType = $this->db->driverName;
$tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
$tableOptions_mssql = "";
$tableOptions_pgsql = "";
$tableOptions_sqlite = "";
/* MYSQL */
if (!in_array('sys_program', $tables))  { 
if ($dbType == "mysql") {
	$this->createTable('{{%sys_program}}', [
		'sys_program_id' => 'INT(12) NOT NULL AUTO_INCREMENT',
		0 => 'PRIMARY KEY (`sys_program_id`)',
		'program_name' => 'VARCHAR(100) NULL',
		'description' => 'VARCHAR(256) NULL',
		'message' => 'TEXT NULL',
		'module_name' => 'VARCHAR(50) NULL',
		'class' => 'VARCHAR(50) NULL',
		'program_source' => 'VARCHAR(25) NULL',
		'report_query' => 'TEXT NULL',
		'request_type' => 'VARCHAR(15) NULL',
		'status' => 'VARCHAR(50) NULL',
		'parameters' => 'TEXT NULL',
		'output_path' => 'VARCHAR(256) NULL',
		'op_email_address' => 'TEXT NULL',
		'op_email_format' => 'VARCHAR(25) NULL',
		'created_by' => 'INT(12) NOT NULL',
		'creation_date' => 'DATETIME NULL',
		'last_update_by' => 'INT(12) NOT NULL',
		'last_update_date' => 'DATETIME NULL',
		'company_id' => 'INT(11) NOT NULL DEFAULT \'0\'',
	], $tableOptions_mysql);
}
}
 
 
$this->execute('SET foreign_key_checks = 0');
$this->insert('{{%sys_program}}',['sys_program_id'=>'9','program_name'=>'prg_standard_cost_update','description'=>'Updating standard cost','message'=>'
 Entered Org Id is : 6
 Entered BOM Cost Type is : PENDING
Using Standard cost update by Item Id ','module_name'=>'','class'=>'class_cst_item_cost_header','program_source'=>'','report_query'=>'','request_type'=>'','status'=>'Completed','parameters'=>'','output_path'=>'','op_email_address'=>'','op_email_format'=>'','created_by'=>'0','creation_date'=>'2014-04-17 20:06:44','last_update_by'=>'0','last_update_date'=>'2017-04-14 20:06:44','company_id'=>'0']);
$this->insert('{{%sys_program}}',['sys_program_id'=>'10','program_name'=>'prg_standard_cost_update','description'=>'Updating standard cost','message'=>'
 Entered Org Id is : 6
 Entered BOM Cost Type is : PENDING
Using Standard cost update by Item Id ','module_name'=>'','class'=>'class_cst_item_cost_header','program_source'=>'','report_query'=>'','request_type'=>'','status'=>'Completed','parameters'=>'','output_path'=>'','op_email_address'=>'','op_email_format'=>'','created_by'=>'0','creation_date'=>'2014-04-17 20:12:17','last_update_by'=>'0','last_update_date'=>'2017-04-14 20:12:17','company_id'=>'0']);

    }

    public function down()
    {
        echo "m160611_095237_first_600 cannot be reverted.\n";
$this->execute('SET foreign_key_checks = 0');
$this->execute('DROP TABLE IF EXISTS `sys_program`');
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
