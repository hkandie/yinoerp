<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmTransport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-transport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departure_date')->textInput() ?>

    <?= $form->field($model, 'arrival_date')->textInput() ?>

    <?= $form->field($model, 'startshipping_date')->textInput() ?>

    <?= $form->field($model, 'endshipping_date')->textInput() ?>

    <?= $form->field($model, 'from_city')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'from_country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'to_city')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'to_country')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transport_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'container_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'weight')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'volume')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'width')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'airfreight_security')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'shipper')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tx_date')->textInput() ?>

    <?= $form->field($model, 'transport_ID')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'awb')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'airfreight_security_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
