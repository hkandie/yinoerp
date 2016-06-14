<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\ar\models\ArCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ar-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_id')->textInput() ?>

    <?= $form->field($model, 'customer_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_reg_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_payer_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ship_to_id')->textInput() ?>

    <?= $form->field($model, 'bill_to_id')->textInput() ?>

    <?= $form->field($model, 'customer_contact_id')->textInput() ?>

    <?= $form->field($model, 'customer_credit_class')->textInput() ?>

    <?= $form->field($model, 'profile_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rev_enabled_cb')->textInput() ?>

    <?= $form->field($model, 'rev_number')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'last_update_by')->textInput() ?>

    <?= $form->field($model, 'last_update_date')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
