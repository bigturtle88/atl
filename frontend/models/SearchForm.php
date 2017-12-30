<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Combaine;

/**
 * CombaineSearch represents the model behind the search form of `backend\models\Combaine`.
 */
class SearchForm extends Model
{
    
    public $id;
    public $excursion_id;
    public $city_id;
    public $typecost_id;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'city_id', 'typecost_id'], 'integer']
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'excursion_id' => 'Excursion',
            'city_id' => 'City',
            'typecost_id' => 'Type of cost',
        ];
    }


}
