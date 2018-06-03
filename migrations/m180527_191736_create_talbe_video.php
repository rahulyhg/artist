<?php

use yii\db\Migration;

/**
 * Class m180527_191736_create_talbe_video
 */
class m180527_191736_create_talbe_video extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'url' => $this->string(),
        ]);
        $this->insert('video', [
            'name' => 'Youtube',
            'url' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180527_191736_create_talbe_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180527_191736_create_talbe_video cannot be reverted.\n";

        return false;
    }
    */
}
