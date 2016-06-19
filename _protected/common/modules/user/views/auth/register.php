<?php

use kartik\form\ActiveForm;
use kartik\builder\Form;
use yii\helpers\Html;

$form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data'],
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'formConfig' => ['labelSpan' => 4]]);
?>
<div class="login-box">
    <?php
    echo Form::widget([
        'model' => $profile,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'first_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => '']],
            'last_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => '']],
            'avatar' => ['type' => Form::INPUT_FILE, 'options' => ['placeholder' => '']],
        ]
    ]);



    echo Form::widget([
        'model' => $user,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter email...']],
            'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
            'newPassword' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
        ]
    ]);
    echo Form::widget([
        'model' => $profile,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'level' => ['type' => Form::INPUT_CHECKBOX, 'label' => ' I Agree to terms of use'],
        ]
    ]);
    $this->title = Yii::t('user', 'Register');
    $this->params['breadcrumbs'][] = $this->title;
    ?>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <?= Html::submitButton(Yii::t('user', 'Register'), ['class' => 'btn btn-primary']) ?>

            <br/><br/>
            <?= Html::a(Yii::t("user", "Login") . "?", ["/user/auth/login"]) ?> / 
            <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/auth/forgot"]) ?> /
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

