<?php

use yii\db\Migration;

/**
 * Handles the creation of table `aticle`.
 */
class m180526_150336_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->string(255),
            'content' => $this->string(255),
            'url' => $this->string(255),
            'image' => $this->string(255),
            'day' => $this->integer(),
            'month' => $this->string(),
            'year' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('articles');
    }
}
