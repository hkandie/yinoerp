<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$role = Yii::$app->getModule("user")->model("Role");

/**
 * @var yii\web\View $this
 * @var common\modules\user\models\User $user
 * @var common\modules\user\models\Profile $profile
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($user, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($user, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($profile, 'first_name'); ?>
    <?= $form->field($profile, 'last_name'); ?>


    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
