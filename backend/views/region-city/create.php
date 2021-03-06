<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RegionCity */

$this->title = 'Create Region City';
$this->params['breadcrumbs'][] = ['label' => 'Region Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'regionList'=> $regionList,
        'cityList' => $cityList
    ]) ?>

</div>
