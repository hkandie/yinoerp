<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmObcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-obc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'startshipping_date') ?>

    <?= $form->field($model, 'endshipping_date') ?>

    <?= $form->field($model, 'from_airport') ?>

    <?= $form->field($model, 'from_city') ?>

    <?php // echo $form->field($model, 'from_country') ?>

    <?php // echo $form->field($model, 'to_airport') ?>

    <?php // echo $form->field($model, 'to_city') ?>

    <?php // echo $form->field($model, 'to_country') ?>

    <?php // echo $form->field($model, 'courier_name') ?>

    <?php // echo $form->field($model, 'user_name') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'airliner') ?>

    <?php // echo $form->field($model, 'flight_number') ?>

    <?php // echo $form->field($model, 'cargo_type') ?>

    <?php // echo $form->field($model, 'tx_date') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'package_type') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'obc_id') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
