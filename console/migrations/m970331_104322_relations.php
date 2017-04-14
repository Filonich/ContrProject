<?php

use yii\db\Migration;

class m970331_104322_relations extends Migration
{
    public function up()
    {
//topic-section
        $this->createIndex('fk_topic_section_idx', 'topic', 'section_id');
        $this->addForeignKey('fk_topic_section', 'topic', 'section_id', 'section', 'id');
        //user-subscription
        $this->createIndex('fk_subscription_user_idx', 'subscriptions', 'user_id');
        $this->addForeignKey('fk_subscription_user', 'subscriptions', 'user_id', 'user', 'id');
        //section-subscription
        $this->createIndex('fk_subscription_section_idx', 'subscriptions', 'section_id');
        $this->addForeignKey('fk_subscription_section', 'subscriptions', 'section_id', 'section', 'id');
        //user-like
        $this->createIndex('fk_user_like_idx', 'like', 'user_id');
        $this->addForeignKey('fk_user_like', 'like', 'user_id', 'user', 'id');
        //like-video
        $this->createIndex('fk_video_like_idx', 'like', 'video_id');
        $this->addForeignKey('fk_video_like', 'like', 'video_id', 'video', 'id');
        //image-section
        $this->createIndex('fk_image_section_idx', 'section', 'image_id');
        $this->addForeignKey('fk_image_section', 'section', 'image_id', 'image', 'id');
        //topic-video
        $this->createIndex('fk_topic_video_idx', 'video', 'topic_id');
        $this->addForeignKey('fk_topic_video', 'video', 'topic_id', 'topic', 'id');
        //image-video
        $this->createIndex('fk_image_video_idx', 'video', 'image_id');
        $this->addForeignKey('fk_image_video', 'video', 'image_id', 'image', 'id');

    }

    public function down()
    {
        echo "m170331_104322_relations cannot be reverted.\n";

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
