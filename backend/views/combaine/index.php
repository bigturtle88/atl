<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Excursion;
use backend\models\Region;
use backend\models\TypeCost;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CombaineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Combaines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combaine-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Combaine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label'=>'Excursion',
                'attribute'=> 'excursion_id',

                'content'=>function($data){
                        $excursion = backend\models\Excursion::findOne($data['excursion_id']);
                        return $excursion->title;
                 },
                'filter'=> $excursion,
            ],
            [
                'label'=>'Region',
                'attribute'=> 'region_id',
                'content'=>function($data){
                        $region = backend\models\Region::findOne($data['region_id']);
                        return $region->title;
                 },
                'filter'=> $region,
            ],
            [
                'label'=>'Type of Cost',
                'attribute'=> 'typecost_id',
                'content'=>function($data){
                        $typecost = backend\models\TypeCost::findOne($data['typecost_id']);
                        return $typecost->title;
                 },
                'filter'=> $typeCost,
            ],

            'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
