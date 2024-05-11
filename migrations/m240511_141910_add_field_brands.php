<?php

use yii\db\Migration;

/**
 * Class m240511_141910_add_field_brands
 */
class m240511_141910_add_field_brands extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('brands', 'show_price', $this->boolean()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240511_141910_add_field_brands cannot be reverted.\n";

        return false;
    }
    */
}
