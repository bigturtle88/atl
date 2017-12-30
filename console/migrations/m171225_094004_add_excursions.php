<?php

use yii\db\Migration;

/**
 * Class m171225_094004_add_excursions
 */
class m171225_094004_add_excursions extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%excursion}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
        ]);
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%excursion}}');
    }

}
