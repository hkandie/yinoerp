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
        'model' => $profile,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'note' => [
                'type' => Form::INPUT_TEXT,
                'label' => 'I am a',
                'options' => ['placeholder' => 'subject', 'label' => 'I am a']
            ],
            'level' => [
                'type' => Form::INPUT_TEXT,
                'label' => '(subject) tutor with',
                'options' => ['placeholder' => 'Enter level']
            ],
            'min_hire_cost' => [
                'label' => ' experience teaching and looking for jobs between ',
                'columnOptions'=>['colspan'=>1],
                'type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'price range from']
            ],
            'max_hire_cost' => [
                'label' => ' Price range to ',
                'type' => Form::INPUT_TEXT, 
                'options' => ['placeholder' => 'price range to']
                ],
            'town' => [
                'type' => Form::INPUT_TEXT,
                'label' => 'Town',
                'options' => ['placeholder' => 'Enter town']
            ],
        ]
    ]);

    echo Form::widget([
        'model' => $user,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
            'newPassword' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']],
        ]
    ]);
    $this->title = Yii::t('user', 'Register');
    $this->params['breadcrumbs'][] = $this->title;
    ?>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <?= Html::submitButton(Yii::t('user', 'Register'), ['class' => 'btn btn-primary']) ?>

            <br/><br/>
            <?= Html::a(Yii::t('user', 'Login'), ["/user/auth/login"]) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

