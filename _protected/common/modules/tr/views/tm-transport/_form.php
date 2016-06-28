<?php

use \kartik\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\tabs\TabsX;


/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmCargo */
/* @var $form yii\widgets\ActiveForm */
$form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data'],
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'formConfig' => ['labelSpan' => 4]]);
?>

<h2 class="heading"><?php echo Yii::t('user', 'Transport Header') ?></h2>
<div class="tm-cargo-form">
    <?php
    $items = [
        [
            'label' => '<i class="glyphicon glyphicon-home"></i>' . Yii::t('app', 'Basic'),
            'content' => $this->render("tabs/basic", ["model" => $model, "form" => $form]),
            'active' => true
        ],
        [
            'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('user', 'Description'),
            'content' => $this->render("tabs/description", ["model" => $model, "form" => $form]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('user', 'AWB'),
            'content' => $this->render("tabs/awb", ["model" => $model, "form" => $form]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('user', 'Note'),
            'content' => $this->render("tabs/note", ["model" => $model, "form" => $form]),
        ],
    ];

    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_ABOVE,
        'encodeLabels' => false
    ]);
    ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary        ']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
