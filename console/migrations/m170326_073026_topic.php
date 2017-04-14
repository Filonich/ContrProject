<?php

use yii\db\Migration;

class m170326_073026_topic extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('topic', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'section_id' => $this->integer(),
            'status'=>$this->integer(),
            'slug' => $this->string()->notNull(),
            'created_at'=> $this->integer(),
            'created_by'=> $this->integer(),
            'updated_at'=> $this->integer(),
            'updated_by'=> $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        echo "m170326_073026_topic cannot be reverted.\n";
$this->dropTable('topic');
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
