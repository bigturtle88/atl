<?php

use yii\db\Migration;

/**
 * Class m171225_122352_add_city
 */
class m171225_122352_add_city extends Migration
{
     /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
        ]);
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%city}}');
    }
}
