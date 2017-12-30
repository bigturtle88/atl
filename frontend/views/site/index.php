<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<div  class="col-xs-12">
    <div class="exchange">
        <?php echo $this->render('_search', ['model' => $model,
            'excursion' => $excursion,
            'city' =>  $city,
            'typeCost' =>  $typeCost
        ]); ?>
    </div>
</div>  
    <div class="col-xs-12">
    <div class="row">
 
        <?php  foreach ($excursion as $key => $one) { ?> 
 <div class="panel">
            <div class="panel-heading" >
                        <h4 class="panel-title">
                            <a role="button">
                                <?= $one ?>
                           </a>
                                <?= $price[$key];?>
                        </h4>
                    </div>
                </div>
        <?php } ?>

    </div>
</div></div>
</div>
