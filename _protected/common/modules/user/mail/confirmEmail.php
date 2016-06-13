<?php

use yii\helpers\Url;

/**
 * @var string $subject
 * @var \common\modules\user\models\User $user
 * @var \common\modules\user\models\Profile $profile
 * @var \common\modules\user\models\UserKey $userKey
 */
$username="";
if(empty($user->username)){
  $user->username="";  
}
?>

<h3><?= $subject ?></h3>
<p>Hi <?=$user->username?>,</p>
<p><?= Yii::t("user", "Please confirm your email address by clicking the link below:") ?></p>

<p><?= Url::toRoute(["/user/auth/confirm", "key" => $userKey->key_value], true); ?></p>
Thanks,
<?=Yii::$app->name?> Support 