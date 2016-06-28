<?php

use \kartik\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\tabs\TabsX;

$this->title = Yii::t('user', $profile->first_name);
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_VERTICAL,
            'formConfig' => ['labelSpan' => 4],]);

$items = [
    [
        'label' => '<i class="glyphicon glyphicon-home"></i>' . Yii::t('app', 'Baic Info'),
        'content' => $this->render("tabs/tab-1", ["profile" => $profile, "form" => $form, 'user' => $user]),
        'active' => true
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Preference'),
        'content' => $this->render("tabs/tab-2", ["profile" => $profile, "form" => $form]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Associations'),
        'content' => $this->render("tabs/tab-3", ["profile" => $profile, "form" => $form]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Future'),
        'content' => $this->render("tabs/tab-4", ["profile" => $profile, "form" => $form]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Attachments'),
        'content' => $this->render("tabs/tab-5", ["profile" => $profile, "form" => $form]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Notes'),
        'content' => $this->render("tabs/tab-6", ["profile" => $profile, "form" => $form]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Profile Picture'),
        'content' => $this->render("tabs/tab-7", ["profile" => $profile, "form" => $form]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Addresses'),
        'content' => $this->render("tabs/tab-8", ["profile" => $profile, "form" => $form, 'addressReference' => $addressReference,
            'address' => $address,]),
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i>' . Yii::t('app', 'Company Details'),
        'content' => $this->render("tabs/tab-9", ["org" => $org, "form" => $form]),
    ],
];
?>
<div class="row">
    <?php
    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_ABOVE,
        'encodeLabels' => false
    ]);
    ?>
</div>
<hr/>


<div class="col-md-9">


    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
</div>



<?php ActiveForm::end(); ?>
<hr/>



