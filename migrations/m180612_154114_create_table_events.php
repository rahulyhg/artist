<?php

use yii\db\Migration;

/**
 * Class m180612_154114_create_table_events
 */
class m180612_154114_create_table_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'time' => $this->string(255),
            'day' => $this->string(255),
            'month' => $this->string(255),
            'year' => $this->integer(),
            'image' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180612_154114_create_table_events cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180612_154114_create_table_events cannot be reverted.\n";

        return false;
    }
    */
}
