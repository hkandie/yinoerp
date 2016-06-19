<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmCargoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tm-cargo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'cargo_id') ?>

    <?= $form->field($model, 'from_company') ?>

    <?= $form->field($model, 'from_street') ?>

    <?php // echo $form->field($model, 'from_address_nr') ?>

    <?php // echo $form->field($model, 'from_zipcode') ?>

    <?php // echo $form->field($model, 'from_city') ?>

    <?php // echo $form->field($model, 'from_state') ?>

    <?php // echo $form->field($model, 'from_country') ?>

    <?php // echo $form->field($model, 'to_company') ?>

    <?php // echo $form->field($model, 'to_street') ?>

    <?php // echo $form->field($model, 'to_address_nr') ?>

    <?php // echo $form->field($model, 'to_zipcode') ?>

    <?php // echo $form->field($model, 'to_city') ?>

    <?php // echo $form->field($model, 'to_state') ?>

    <?php // echo $form->field($model, 'to_country') ?>

    <?php // echo $form->field($model, 'arrival_date') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'cargo_type') ?>

    <?php // echo $form->field($model, 'transport_type') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'physical_state') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'tx_date') ?>

    <?php // echo $form->field($model, 'weight_unit') ?>

    <?php // echo $form->field($model, 'volume_unit') ?>

    <?php // echo $form->field($model, 'length_unit') ?>

    <?php // echo $form->field($model, 'height_unit') ?>

    <?php // echo $form->field($model, 'width_unit') ?>

    <?php // echo $form->field($model, 'size_unit') ?>

    <?php // echo $form->field($model, 'image_file_id') ?>

    <?php // echo $form->field($model, 'attach_id_values') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
