<?php

use yii\db\Migration;

/**
 * Class m171225_143748_add_type_cost
 */
class m171225_143747_add_type_cost extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%type_cost}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
        ]);
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%type_cost}}');
    }
}
