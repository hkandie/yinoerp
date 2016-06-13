<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = Yii::t('user', 'Forgot password');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-box-body login-header">
        <h1><?= Html::img(Yii::$app->request->baseUrl .'/site/data/org_images/' . common\modules\settings\models\Organization::find(1)->one()->org_logo, ['width' => '150px;']) ?></h1>
    </div>
    <div class="login-box-body">
        <div class="user-default-forgot">

            <h1><?= Html::encode($this->title) ?></h1>

            <?php if ($flash = Yii::$app->session->getFlash('Forgot-success')): ?>

                <div class="alert alert-success">
                    <p><?= $flash ?></p>
                </div>

            <?php else: ?>

                <div class="row">
                    <div class="col-lg-5">
                        <?php $form = ActiveForm::begin(['id' => 'forgot-form']); ?>
                        <?= $form->field($model, 'email') ?>
                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('user', 'Submit'), ['class' => 'btn btn-primary']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            <?php endif; ?>

        </div>
        <div class="col-lg-offset-2" style="color:#999;">
            <p><?= Html::a(Yii::t("user", "Log in here"), ["/user/auth/login"]) ?></p>
            To modify the username/password, log in first and then <?= HTML::a("update your account", ["/user/auth/account"]) ?>.
        </div>
    </div>
</div>

