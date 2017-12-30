<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "region_city".
 *
 * @property int $id
 * @property int $region_id
 * @property int $city_id
 */
class RegionCity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region_city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id', 'city_id'], 'required'],
            [['region_id', 'city_id'], 'integer'],
            [['region_id', 'city_id'], 'unique', 'targetAttribute' => ['region_id', 'city_id'], 'message'=>'Dublicate value'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'city_id' => 'City ID',
        ];
    }
}
