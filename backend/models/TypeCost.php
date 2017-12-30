<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Region;
use backend\models\Excursion;
use backend\models\TypeCost;
use backend\models\City;
use backend\models\RegionCity;
use backend\models\Combaine;
use yii\helpers\BaseJson;
/**
 * This is the model class for table "type_cost".
 *
 * @property int $id
 * @property string $title
 */
class TypeCost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_cost';
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
    *Generate TypeCost list
    *
    *
    * @return array
    */
    public static function getTypeCostList()
    {
        $typeCost = TypeCost::find()
                ->select(['id', 'title'])
                ->all();
        return ArrayHelper::map($typeCost, 'id', 'title');
    }

    /**
    *Generate City list
    *
    * @param int $id
    * @return array
    */
    public function costCityList($id = null)
    {
        if($id!=null){

            $regionCity = (new RegionCity())->find()->where(['city_id'=> $id])->one();
            $combaine = (new Combaine())->find()->select(['typecost_id'])->where(['region_id'=> $regionCity->region_id])->distinct();
            $typeCost = (new TypeCost())->find()->where(['id'=> $combaine])->all();
            $data = [];
            if(!empty($typeCost )){
                foreach ($typeCost  as $key => $value) {
                    $data['results'][] = ['id' => $value['id'], 'text' => $value['title']] ;
                }
            return BaseJson::encode($data);
         }
         return null;
        }

    }

    /**
    *Generate price list
    *
    * @param obj $searchForm
    * @return array
    */
    public function priceList($searchForm =null)
    {
        if($searchForm) {    
            $regionCity = (new RegionCity())->find()->where(['city_id'=> $searchForm->typecost_id])->one();
                $price = (new Combaine())->find()->where(['typecost_id'=> $searchForm->typecost_id, 
                'region_id'=>$regionCity->region_id])->all();
            $price = ArrayHelper::map( $price ,'excursion_id','price');
            return $price;
        }
        return [];
    }
}
