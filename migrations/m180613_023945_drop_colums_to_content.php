<?php

use yii\db\Migration;

/**
 * Class m180613_023945_drop_colums_to_content
 */
class m180613_023945_drop_colums_to_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('content', 'time');
        $this->dropColumn('content', 'day');
        $this->dropColumn('content', 'month');
        $this->dropColumn('content', 'year');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180613_023945_drop_colums_to_content cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180613_023945_drop_colums_to_content cannot be reverted.\n";

        return false;
    }
    */
}
