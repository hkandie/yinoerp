<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\org\models\Org */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="org-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'org')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enterprise_org_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_org_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business_org_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inventory_org_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ef_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rev_enabled')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rev_number')->textInput() ?>

    <?= $form->field($model, 'address_id')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'last_update_by')->textInput() ?>

    <?= $form->field($model, 'last_update_date')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
