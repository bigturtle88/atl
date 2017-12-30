<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "combaine".
 *
 * @property int $id
 * @property int $excursion_id
 * @property int $region_id
 * @property int $typecost_id
 * @property string $price
 */
class Combaine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'combaine';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['excursion_id', 'region_id', 'typecost_id', 'price'], 'required'],
            [['excursion_id', 'region_id', 'typecost_id'], 'integer'],
            [['excursion_id', 'region_id', 'typecost_id'], 'unique', 'targetAttribute' => ['excursion_id', 'region_id', 'typecost_id'], 'message'=>'Dublicate value'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'excursion_id' => 'Excursion ID',
            'region_id' => 'Region ID',
            'typecost_id' => 'Typecost ID',
            'price' => 'Price',
        ];
    }
}
