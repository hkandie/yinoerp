<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <div class="col-lg-10 well bs-component">

        <p>
            <?= Yii::t('app', 'Get in Touch, Please fill out the following form to contact us.'); ?>
            <br/>
        </p>

        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'enableAjaxValidation' => true,]); ?>

        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'phoneno') ?>

        <div class="form-group">
            <span class="btn btn-block btn-success" onclick="submit_contact_form()">Get in Touch</span>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
<script type="text/javascript">
    function submit_contact_form() {
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var yourarray = $('#contact-form').serialize();
        console.log(yourarray);
        $.ajax({
            type: "POST",
            dataType: "HTML",
            url: "<?= yii\helpers\Url::base() ?>/site/contact",
            data: yourarray + "&_csrf=" + csrfToken,
            success: function (response) {
                $("#new-qoute").html(response);

            }
        });
    }
</script>