<?php

use yii\db\Migration;

/**
 * Class m180607_063025_update_table_content
 */
class m180607_063025_update_table_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('content', 'content', 'text');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180607_063025_update_table_content cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180607_063025_update_table_content cannot be reverted.\n";

        return false;
    }
    */
}
