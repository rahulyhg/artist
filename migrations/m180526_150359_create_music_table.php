<?php

use yii\db\Migration;

/**
 * Handles the creation of table `music`.
 */
class m180526_150359_create_music_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('music', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'path' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('music');
    }
}
