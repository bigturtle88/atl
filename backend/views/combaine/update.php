<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Combaine */

$this->title = 'Update Combaine: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Combaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="combaine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'excursion' => $excursion,
        'region' =>  $region,
        'typeCost' =>  $typeCost
    ]) ?>

</div>
