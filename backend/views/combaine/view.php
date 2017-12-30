<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Excursion;
use backend\models\Region;
use backend\models\TypeCost;

/* @var $this yii\web\View */
/* @var $model backend\models\Combaine */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Combaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combaine-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
[
                'label'=>'Excursion',
                'attribute'=> 'excursion_id',
                'value'=>function($data){
 
                        $excursion = backend\models\Excursion::findOne($data['excursion_id']);
                        return $excursion->title;
                 },
 
            ],
            [
                'label'=>'Region',
                'attribute'=> 'region_id',
                'value'=>function($data){
                        $region = backend\models\Region::findOne($data['region_id']);
                        return $region->title;
                 },
 
            ],
            [
                'label' =>'Type of Cost',
                'attribute'=> 'typecost_id',
                'value' =>function($data){
                        $typecost = backend\models\TypeCost::findOne($data['typecost_id']);
                        return $typecost->title;
                 },
 
            ],
            'price',
        ],
    ]) ?>

</div>
