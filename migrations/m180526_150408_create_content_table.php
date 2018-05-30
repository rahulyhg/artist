<?php

use yii\db\Migration;

/**
 * Handles the creation of table `content`.
 */
class m180526_150408_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'title' => $this->string(),
            'content' => $this->string(),
            'time' => $this->string(),
            'day' => $this->string(),
            'month' => $this->string(),
            'year' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('content');
    }
}
