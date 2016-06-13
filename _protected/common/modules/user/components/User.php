<?php

namespace common\modules\user\components;

use Yii;

/**
 * User component
 */
class User extends \yii\web\User {

    /**
     * @inheritdoc
     */
    public $identityClass = 'common\modules\user\models\User';

    /**
     * @inheritdoc
     */
    public $enableAutoLogin = true;

    /**
     * @inheritdoc
     */
    public $loginUrl = ["/user/auth/login"];
    public $logoutUrl = ["/user/auth/logout"];

    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();

        // check if user is banned. if so, log user out and redirect home
        /** @var \common\modules\user\models\User $user */
        $user = $this->getIdentity();
        if ($user && $user->ban_time) {
            $this->logout();
            Yii::$app->getResponse()->redirect(['/'])->send();
            return;
        }
        
    }

    /**
     * Check if user is logged in
     *
     * @return bool
     */
    public function getIsLoggedIn() {
        return !$this->getIsGuest();
    }

    /**
     * @inheritdoc
     */
    public function afterLogin($identity, $cookieBased, $duration) {
        /** @var \common\modules\user\models\User $identity */
        $identity->updateLoginMeta();
        parent::afterLogin($identity, $cookieBased, $duration);
    }

    /**
     * Get user's display name
     *
     * @param string $default
     * @return string
     */
    public function getDisplayName($default = "") {
        /** @var \common\modules\user\models\User $user */
        $user = $this->getIdentity();
        return $user ? $user->getDisplayName($default) : "";
    }

    /**
     * Check if user can do $permissionName.
     * If "authManager" component is set, this will simply use the default functionality.
     * Otherwise, it will use our custom permission system
     *
     * @param string $permissionName
     * @param array  $params
     * @param bool   $allowCaching
     * @return bool
     */
}
