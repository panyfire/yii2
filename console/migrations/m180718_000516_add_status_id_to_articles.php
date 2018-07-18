<?php

use yii\db\Migration;

/**
 * Class m180718_000516_add_status_id_to_articles
 */
class m180718_000516_add_status_id_to_articles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('articles', 'status_id',$this->integer(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180718_000516_add_status_id_to_articles cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180718_000516_add_status_id_to_articles cannot be reverted.\n";

        return false;
    }
    */
}
