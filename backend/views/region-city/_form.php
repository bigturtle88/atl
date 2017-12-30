<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegionCity */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
	$params = [
        'prompt' => 'Please select status...'
    	];
?>
<div class="region-city-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'region_id')->dropDownList($regionList, $params); ?> 

    <?= $form->field($model, 'city_id')->dropDownList($cityList, $params); ?> 

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
