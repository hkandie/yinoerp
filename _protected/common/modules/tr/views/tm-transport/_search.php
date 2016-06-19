<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmTransportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-transport-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'departure_date') ?>

    <?= $form->field($model, 'arrival_date') ?>

    <?= $form->field($model, 'startshipping_date') ?>

    <?php // echo $form->field($model, 'endshipping_date') ?>

    <?php // echo $form->field($model, 'from_city') ?>

    <?php // echo $form->field($model, 'from_country') ?>

    <?php // echo $form->field($model, 'to_city') ?>

    <?php // echo $form->field($model, 'to_country') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'transport_type') ?>

    <?php // echo $form->field($model, 'container_type') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'airfreight_security') ?>

    <?php // echo $form->field($model, 'shipper') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'tx_date') ?>

    <?php // echo $form->field($model, 'transport_ID') ?>

    <?php // echo $form->field($model, 'awb') ?>

    <?php // echo $form->field($model, 'airfreight_security_type') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
