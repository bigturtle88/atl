<?php

use yii\db\Migration;

/**
 * Class m171229_131502_region_city
 */
class m171229_131502_region_city extends Migration
{
     public function up()
    {
        $this->createTable('{{%region_city}}', [
            'id' => $this->primaryKey(),
            'region_id' => $this->integer()->notNull(),
            'city_id' => $this->integer()->notNull(),
        ]);
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%region_city}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171229_131502_region_city cannot be reverted.\n";

        return false;
    }
    */
}
