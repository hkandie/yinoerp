<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Resend');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-box-body login-header">
        <h1><?= Html::img(Yii::$app->request->baseUrl .'/site/data/org_images/' . common\modules\settings\models\Organization::find(1)->one()->org_logo, ['width' => '150px;']) ?></h1>
    </div>
    <div class="login-box-body">

        <div class="user-default-resend">

            <h1><?= Html::encode($this->title) ?></h1>

            <?php if ($flash = Yii::$app->session->getFlash('Resend-success')): ?>

                <div class="alert alert-success">
                    <p><?= $flash ?></p>
                </div>

            <?php else: ?>

                <div class="row">
                    <div class="col-lg-5">
                        <?php $form = ActiveForm::begin(['id' => 'resend-form']); ?>
                        <?= $form->field($model, 'email') ?>
                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('user', 'Submit'), ['class' => 'btn btn-primary']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            <?php endif; ?>


            
                <br/><br/>
                <?= Html::a(Yii::t("user", "Register"), ["/user/auth/register"]) ?> /
                <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/auth/forgot"]) ?> /
                <?= Html::a(Yii::t("user", "Resend confirmation email"), ["/user/auth/resend"]) ?>
            
        </div>
    </div>
</div>

