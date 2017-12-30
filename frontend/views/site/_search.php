<?php
use yii\widgets\ActiveForm;

use \yii\helpers\Html;
use kartik\select2\Select2;
use yii\web\JsExpression;
$url = \yii\helpers\Url::to(['cost-city-list']);

$dropDownListDefult = [
    'prompt' =>  'All...'
];
?>


<?php
$form = ActiveForm::begin([
            'method' => 'post'
        ]);
?>

<div  class="col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">Search</div>
        <div class="panel-body">


            <div class="input-group input-group-sm ">
                <div class="row">
     
                    <div class="col-xs-2">
                        <?=
                        $form->field($model, 'city_id')->widget(Select2::classname(), [
                            'name' => 'City',
                            'data' =>  $city, // initial value
                            'maintainOrder' => true,
                            'showToggleAll' => false,
                            'class' => 'city-list',
                            'options' => ['placeholder' => 'Select...'],
                            'pluginOptions' => [
                                'type' => 'get',
                            ],
                        ]);
                        ?> 



                    </div>
                    <div class="col-xs-2">        
                        <?=
                        $form->field($model, 'typecost_id')->widget(Select2::classname(), [
                            'name' => 'Typecost',
                            'maintainOrder' => true,
                            'showToggleAll' => false,
                            'options' => ['placeholder' => 'Select a state ...'],
                            'pluginOptions' => [
                                'type' => 'get',
                                'ajax' => [
                                'url' => $url,
                                'dataType' => 'json',
                                'data' => new JsExpression('function(params) {
                                         var cityId = $("#searchform-city_id").select2("val"); 
                                         return {id:cityId}
                                          }')
                            ],
                            ],
                             
                        ]);
                        ?> 
                    </div>
                <div class="col-xs-2">
                    <?= Html::submitButton('Search', ['class' => 'btn btn-info', 'name' => 'signup-button']) ?>
            </div>
        </div>
    </div>    </div>    </div>
 

    <?php ActiveForm::end(); ?>