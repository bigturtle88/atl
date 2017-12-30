<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Combaine */
/* @var $form yii\widgets\ActiveForm */
?>
<?php

$params = [
        'prompt' => 'Please select status...'
    ]; 
?>

<div class="combaine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'excursion_id')->dropDownList($excursion, $params); ?>

    <?= $form->field($model, 'region_id')->dropDownList($region, $params); ?>

    <?= $form->field($model, 'typecost_id')->dropDownList($typeCost, $params); ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
