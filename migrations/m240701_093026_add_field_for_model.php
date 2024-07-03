<?php

use yii\db\Migration;

/**
 * Class m240701_093026_add_field_for_model
 */
class m240701_093026_add_field_for_model extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('models', 'show_price', $this->boolean()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240701_093026_add_field_for_model cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240701_093026_add_field_for_model cannot be reverted.\n";

        return false;
    }
    */
}
