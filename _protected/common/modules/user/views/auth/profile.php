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
    <div class="col-md-3">
        <div class="row" style="padding: 2px">
            <div class="thumbnail">
                <?= Html::img(Yii::$app->request->baseUrl . '/uploads/user_images/' . $profile->avatar) ?>
                <div class="caption">
                    <hr/>
                    <h3><?= $profile->first_name . ' ' . $profile->last_name ?></h3>
                    <p>Subject: <?= $profile->note ?></p>
                    <p>Price: <?= $profile->min_hire_cost ?></p>
                    <p>Location: <?= $profile->location ?></p>
                    <p>Level: <?= $profile->location ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
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
                    'columnOptions' => ['colspan' => 1],
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
            ]
        ]);
        $this->title = Yii::t('user', $profile->first_name);
        $this->params['breadcrumbs'][] = $this->title;
        ?>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

