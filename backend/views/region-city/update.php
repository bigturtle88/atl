<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RegionCity */

$this->title = 'Update Region City: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Region Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="region-city-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
      	'regionList'=> $regionList,
        'cityList' => $cityList 
    ]) ?>

</div>
