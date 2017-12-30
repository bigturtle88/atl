<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Combaine */

$this->title = 'Create Combaine';
$this->params['breadcrumbs'][] = ['label' => 'Combaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="combaine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'excursion' => $excursion,
        'region' =>  $region,
        'typeCost' =>  $typeCost
    ]) ?>

</div>
