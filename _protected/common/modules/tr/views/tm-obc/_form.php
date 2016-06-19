<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmObc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-obc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'startshipping_date')->textInput() ?>

    <?= $form->field($model, 'endshipping_date')->textInput() ?>

    <?= $form->field($model, 'from_airport')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'from_city')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'from_country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'to_airport')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'to_city')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'to_country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'courier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'volume')->textInput() ?>

    <?= $form->field($model, 'airliner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flight_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tx_date')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'package_type')->textInput() ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obc_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
