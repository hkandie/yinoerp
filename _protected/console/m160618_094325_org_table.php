<?php

use yii\db\Migration;

class m160618_094325_org_table extends Migration {

    public function up() {
        $this->addColumn("org", "org_logo", \yii\db\Schema::TYPE_STRING);
    }

    public function down() {
        echo "m160618_094325_org_table cannot be reverted.\n";
        $this->dropColumn("org", "org_logo");
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
