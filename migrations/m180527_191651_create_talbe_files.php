<?php

use yii\db\Migration;

/**
 * Class m180527_191651_create_talbe_files
 */
class m180527_191651_create_talbe_files extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('files', [
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
        echo "m180527_191651_create_talbe_files cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180527_191651_create_talbe_files cannot be reverted.\n";

        return false;
    }
    */
}
