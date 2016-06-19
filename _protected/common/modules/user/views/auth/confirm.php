<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = Yii::t('user', $success ? 'Confirmed' : 'Error');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-box-body login-header">
        <h1><?= Html::img(Yii::$app->request->baseUrl .'/site/data/org_images/' . \common\modules\org\models\Org::find(1)->one()->org_logo, ['width' => '150px;']) ?></h1>
    </div>
    <div class="login-box-body">
        <div class="user-default-confirm">

            <?php if ($success): ?>

                <div class="alert alert-success">

                    <p><?= Yii::t("user", "Your email [ {email} ] has been confirmed", ["email" => $success]) ?></p>

                    <?php if (Yii::$app->user->isLoggedIn): ?>

                        <p><?= Html::a(Yii::t("user", "Go to my account"), ["/user/auth/account"]) ?></p>
                        <p><?= Html::a(Yii::t("user", "Go home"), Yii::$app->getHomeUrl()) ?></p>

                    <?php else: ?>

                        <p><?= Html::a(Yii::t("user", "Log in here"), ["/user/auth/login"]) ?></p>

                    <?php endif; ?>

                </div>


            <?php else: ?>

                <div class="alert alert-danger"><?= Yii::t("user", "Invalid key") ?></div>

            <?php endif; ?>


           <br/><br/>
                <?= Html::a(Yii::t("user", "Register"), ["/user/auth/register"]) ?> /
                <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/auth/forgot"]) ?> /
                <?= Html::a(Yii::t("user", "Resend confirmation email"), ["/user/auth/resend"]) ?>
            </div>
        </div>
    </div>
</div>

