<?php

use yii\db\Migration;

class m170326_073142_subscription extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('subscriptions', [
            'user_id' => $this->integer(),
            'section_id' => $this->integer(),
            'PRIMARY KEY (`user_id`, `section_id`)',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170326_073142_subscription cannot be reverted.\n";
$this->dropTable('subscription');
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
