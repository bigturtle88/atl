<?php

use yii\db\Migration;

/**
 * Class m171225_121501_add_region
 */
class m171225_121501_add_region extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%region}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
        ]);
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%region}}');
    }
}
