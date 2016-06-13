<?php

use yii\helpers\Url;

/**
 * @var string $subject
 * @var \common\modules\user\models\User $user
 * @var \common\modules\user\models\UserKey $userKey
 */
$username = "";
if (empty($user->username)) {
    $user->username = "";
}
?>

<h3><?= $subject ?></h3>

<p>Hi <?= $user->profile->fullName ?>,</p>
<p>
    <?= Yii::t("user", "Please use this link to reset your password:") ?><br/>
    <?= Yii::$app->name ?> recently received a request for a forgotten password.<br/>
    To change your <?= Yii::$app->name ?> password, please click on this link.<br/>
    <br/><br/>If you did not request this change, you do not need to do anything.
    This link will expire in 4 hours.
</p>
<p><?= Url::toRoute(["/user/auth/reset", "key" => $userKey->key_value], true); ?></p>
<br/>

Thanks,
<br/>
<?= Yii::$app->name ?> Support 
