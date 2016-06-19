<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\address\models\AddressReferenceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-reference-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'address_reference_id') ?>

    <?= $form->field($model, 'address_id') ?>

    <?= $form->field($model, 'reference_table') ?>

    <?= $form->field($model, 'reference_id') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
