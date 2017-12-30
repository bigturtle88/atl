<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TypeCost */

$this->title = 'Create Type Cost';
$this->params['breadcrumbs'][] = ['label' => 'Type Costs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-cost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
