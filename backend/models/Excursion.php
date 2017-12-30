<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "excursion".
 *
 * @property int $id
 * @property string $title
 */
class Excursion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'excursion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
    *Generate exursion list
    */
    public static function getExcursionList() {
        $excursion = Excursion::find()
                ->select(['id', 'title'])
                ->all();
        return ArrayHelper::map($excursion, 'id', 'title');
    }
}
