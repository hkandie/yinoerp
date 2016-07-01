<?php


use yii\helpers\Url;
use yii\bootstrap\NavBar;
use kartik\nav\NavX;

$search = $this->render("search");
$this->beginBody();
$navBarOptions = ['options' => ['class' => 'navbar navbar-default', "style" => "background-color: #2574A9"],];
$items = [
    ['label' => '<img alt= "logo" class="logo_image" src="'.Url::to("@web/themes/files/logo.png",true).'">', 'url' => Url::base(true)],
    ['label' => 'inoERP', 'url' => Url::base(true), 'active' => true, 'options' => ['class' => 'navbar-brand'],],
];

NavBar::begin($navBarOptions);
echo NavX::widget([
    'options' => ['class' => 'navbar-nav', "style" => "background-color: #2574A9"],
    'items' => $items,
    'activateParents' => true,
    'encodeLabels' => false
]);
$user = \common\modules\user\models\User::findOne(Yii::$app->user->id);
$name = Yii::$app->user->identity->username;
if (is_object($user->profile)) {
    $name = $user->profile->fullName;
}


$items = [

    '<li>' . $search . '</li>',
    ['label' => '<i class="fa fa-user"></i> ' . $name, 'active' => true,
        'items' => [
            ['label' => '<i class="fa fa-home"></i>Home', 'url' => '', 'options' => ['class' => 'profile-link']],
            ['label' => '<i class="fa fa-product-hunt"></i>My Details', 'url' => 'user/auth/profile?id=' . Yii::$app->user->id, 'options' => ['class' => 'profile-link']],
            ['label' => '<i class="fa fa-print"></i>Change Password', 'url' => 'user/auth/passwd', 'options' => ['class' => 'profile-link']],
            '<li role="separator" class="divider"></li>',
            ['label' => '<i class="fa fa-tasks"></i>Activities', 'url' => 'dashboard/activity', 'options' => ['class' => 'profile-link']],
            ['label' => '<i class="fa fa-bell-slash-o"></i>Notification', 'url' => 'dashboard/notification', 'options' => ['class' => 'profile-link']],
            ['label' => '<i class="fa fa-dashboard"> </i>Dashboard', 'url' => 'dashboard', 'options' => ['class' => 'profile-link']],
            ['label' => '<i class="fa fa-cog"></i> Configure', 'url' => 'dashboard/configure', 'options' => ['class' => 'profile-link']],
            '<li role="separator" class="divider"></li>',
            ['label' => '<i class="fa fa-sign-out"></i> Logout', 'url' => 'user/auth/logout', 'options' => ['class' => 'profile-link']]
        ]
        ]];
echo NavX::widget([
    'options' => ['class' => 'nav navbar-nav navbar-right', "style" => "background-color: #2574A9"],
    'items' => $items,
    'activateParents' => true,
    'encodeLabels' => false
]);
NavBar::end();
?> 