<?php

use yii\db\Migration;

class m170326_073108_video extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'path' => $this->string()->notNull()->unique(),
            'description' => $this->string()->notNull()->unique(),
            'topic_id' => $this->integer(),
            'image_id' => $this->integer(),
            'created_at'=> $this->integer(),
            'created_by'=> $this->integer(),
            'updated_at'=> $this->integer(),
            'updated_by'=> $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170326_073108_video cannot be reverted.\n";
$this->dropTable('video');
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
