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

        $this->insert('files', [
            'name' => 'press-reliz',
        ]);
        $this->insert('files', [
            'name' => 'teh-rider',
        ]);
        $this->insert('files', [
            'name' => 'bit-rider',
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
