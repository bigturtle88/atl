<?php

use yii\db\Migration;

/**
 * Class m171225_143748_add_type_cost
 */
class m171225_143748_add_combaine extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%combaine}}', [
            'id' => $this->primaryKey(),
            'excursion_id' => $this->integer()->notNull(),
            'region_id' => $this->integer()->notNull(),
            'typecost_id' => $this->integer()->notNull(),
            'price' => $this->decimal(7,2)->notNull()->defaultValue(0.00),
        ]);

    $this->addForeignKey('fk-combaine-excursion_id', '{{%combaine}}', 'excursion_id', '{{%excursion}}', 'id', 'RESTRICT');
    $this->addForeignKey('fk-combaine-region_id', '{{%combaine}}', 'region_id', '{{%region}}', 'id', 'RESTRICT');
    $this->addForeignKey('fk-combaine-typecost_id', '{{%combaine}}', 'typecost_id', '{{%type_cost}}', 'id', 'RESTRICT');
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%combaine}}');
    }
}
