<?php

use \kartik\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\tabs\TabsX;

$this->title = Yii::t('user', $profile->first_name);
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_VERTICAL,
            'formConfig' => ['labelSpan' => 4],
            'enableAjaxValidation' => true]);

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
        'content' => $this->render("tabs/tab-9", ["profile" => $profile, "form" => $form]),
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


<?php
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-home"></i>' . Yii::t('user', 'Role Control'),
        'content' => $this->render("tabs/role-control", ["profile" => $profile, "form" => $form, 'user' => $user]),
        'active' => true
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('user', 'User Group Assignment'),
        'content' => $this->render("tabs/user-group-assignment", ["profile" => $profile, "form" => $form]),
    ],
];
?>
<div class="row">
    <span class="heading"><?php echo Yii::t('user', 'User Access Details') ?></span>
    <?php
    echo TabsX::widget([
        'items' => $items,
        'position' => TabsX::POS_ABOVE,
        'encodeLabels' => false
    ]);
    ?>
</div>

<div class="col-md-9">


    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ["onclick"=>"javascript:save(this)",'class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>
</div>



<?php ActiveForm::end(); ?>
<hr/>




<script>
    function save(e) {
        var str = $("#w0").serialize();
        var url = $("#w0").attr("action");
        $(".progress").html("Please wait... loading");
        $.ajax({
            type: "POST",
            url: url,
            data: str,
            success: function (data) {
                $(".progress").html('');
                $("#status").html(data);
            }
        });
    }
</script>