<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\user\models\forms\PasswdForm */
/* @var $form ActiveForm */
?>
<div class="passwd">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'oldpassword') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'newpassword') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('user', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- passwd -->
