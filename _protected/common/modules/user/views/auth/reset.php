<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var common\modules\user\models\forms\LoginForm $model
 */
$this->title = Yii::t('user', 'Reset');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-box-body login-header">
        <h1><?= Html::img(Yii::$app->request->baseUrl .'/site/data/org_images/' . \common\modules\org\models\Org::find(1)->one()->org_logo, ['width' => '150px;']) ?></h1>
    </div>
    <div class="login-box-body">
        <div class="user-default-reset">

            <h1><?= Html::encode($this->title) ?></h1>

            <?php if (!empty($success)): ?>

                <div class="alert alert-success">

                    <p><?= Yii::t("user", "Password has been reset") ?></p>
                    <p><?= Html::a(Yii::t("user", "Log in here"), ["/user/auth/login"]) ?></p>

                </div>

            <?php elseif (!empty($invalidKey)): ?>

                <div class="alert alert-danger">
                    <p><?= Yii::t("user", "Invalid key") ?></p>
                </div>

            <?php else: ?>

                <div class="row">
                    <div class="col-lg-5">
                        <?php $form = ActiveForm::begin(['id' => 'reset-form']); ?>

                        <?= $form->field($user, 'newPassword')->passwordInput() ?>
                        <?= $form->field($user, 'newPasswordConfirm')->passwordInput() ?>
                        <div class="form-group">
                            <?= Html::submitButton(Yii::t("user", "Reset"), ['class' => 'btn btn-primary']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            <?php endif; ?>

        </div>
        <div class="col-lg-offset-2" style="color:#999;">
            To modify the username/password, log in first and then <?= HTML::a("update your account", ["/user/auth/account"]) ?>.
        </div>
    </div>
</div>

