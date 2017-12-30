<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegionCitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Region Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Region City', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=>'Region',
                'attribute'=> 'region_id',

                'content'=>function($data){
                        $result = backend\models\Region::findOne($data['region_id']);
                        return  $result ->title;
                 },
                'filter'=>  $result ,
            ],
            [
                'label'=>'Region',
                'attribute'=> 'city_id',

                'content'=>function($data){
                         $result  = backend\models\City::findOne($data['city_id']);
                        return  $result ->title;
                 },
                'filter'=>  $result ,
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
