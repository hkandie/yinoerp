<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var common\modules\user\models\forms\LoginForm $model
 */
$this->title = Yii::t('user', 'Login');
$this->params['breadcrumbs'][] = $this->title;
$logo=common\modules\settings\models\Organization::find(1)->one();
if(empty($logo)){
 $logo->org_logo="default-logo.jpg";   
}
?>
<div class="login-box">
    <div class="login-box-body login-header">
        <h1><?= Html::img(Yii::$app->request->baseUrl .'/site/data/org_images/' . $logo->org_logo, ['width' => '150px;']) ?></h1>
    </div>
    <div class="login-box-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <p><?= Yii::t("user", "Please fill out the following fields to login:") ?></p>

        <?php
        $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'form-horizontal'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-2 control-label'],
                    ],
        ]);
        ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?=
        $form->field($model, 'rememberMe', [
            'template' => "{label}<div class=\"col-lg-offset-2 col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
        ])->checkbox()
        ?>

        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <?= Html::submitButton(Yii::t('user', 'Login'), ['class' => 'btn btn-primary']) ?>

                <br/><br/>
                
                <?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/auth/forgot"]) ?> /
                
            </div>
        </div>

        <?php ActiveForm::end(); ?>

        <?php if (Yii::$app->get("authClientCollection", false)): ?>
            <div class="col-lg-offset-2 col-lg-10">
                <?=
                yii\authclient\widgets\AuthChoice::widget([
                    'baseAuthUrl' => ['/user/auth/login']
                ])
                ?>
            </div>
        <?php endif; ?>

        
    </div>
</div>

