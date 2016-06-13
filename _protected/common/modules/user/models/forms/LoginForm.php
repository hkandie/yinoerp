<?php

namespace common\modules\user\models\forms;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model {

    /**
     * @var string Username and/or email
     */
    public $username;

    /**
     * @var string Password
     */
    public $password;
    public $user_type = "A";

    /**
     * @var bool If true, users will be logged in for $loginDuration
     */
    public $rememberMe = true;

    /**
     * @var \common\modules\user\models\User
     */
    protected $_user = false;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            [["username", "password", "user_type"], "required"],
            ["username", "validateUser"],
            ["username", "validateUserStatus"],
            ["password", "validatePassword"],
            ["rememberMe", "boolean"],
        ];
    }

    /**
     * Validate user
     */
    public function validateUser() {
        // check for valid user or if user registered using social auth
        $user = $this->getUser();
        if (!$user || !$user->password) {
            if (Yii::$app->getModule("user")->loginEmail && Yii::$app->getModule("user")->loginUsername) {
                $attribute = "Email / Username";
            } else {
                $attribute = Yii::$app->getModule("user")->loginEmail ? "Email" : "Username";
            }
            $this->addError("username", Yii::t("user", "$attribute not found"));

            // do we need to check $user->userAuths ???
        }
    }

    /**
     * Validate user status
     */
    public function validateUserStatus() {
        // check for ban status
        $user = $this->getUser();
        if ($user->ban_time) {
            $this->addError("username", Yii::t("user", "User is banned - {banReason}", [
                        "banReason" => $user->ban_reason,
            ]));
        }

        // check status and resend email if inactive
        if ($user->status == $user::STATUS_INACTIVE) {

            /** @var \common\modules\user\models\UserKey $userKey */
            $userKey = Yii::$app->getModule("user")->model("UserKey");
            $userKey = $userKey::generate($user->id, $userKey::TYPE_EMAIL_ACTIVATE);
            $user->sendEmailConfirmation($userKey);
            $this->addError("username", Yii::t("user", "Confirmation email resent"));
        }
    }

    /**
     * Validate password
     */
    public function validatePassword() {
        // skip if there are already errors
        if ($this->hasErrors()) {
            return;
        }

        /** @var \common\modules\user\models\User $user */
        // check if password is correct
        $user = $this->getUser();
        if (!$user->validatePassword($this->password)) {
            $this->addError("password", Yii::t("user", "Incorrect password"));
        }
    }

    /**
     * Get user based on email and/or username
     *
     * @return \common\modules\user\models\User|null
     */
    public function getUser() {
        // check if we need to get user
        if ($this->_user === false) {

            // build query based on email and/or username login properties
            $user = Yii::$app->getModule("user")->model("User");
            $user = $user::find();
            if (Yii::$app->getModule("user")->loginEmail) {
                $user->orWhere(["email" => $this->username]);
            }
            if (Yii::$app->getModule("user")->loginUsername) {
                $user->orWhere(["username" => $this->username]);
            }

            // get and store user
            $this->_user = $user->one();
        }

        // return stored user
        return $this->_user;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        // calculate attribute label for "username"
        if (Yii::$app->getModule("user")->loginEmail && Yii::$app->getModule("user")->loginUsername) {
            $attribute = "Email / Username";
        } else {
            $attribute = Yii::$app->getModule("user")->loginEmail ? "Email" : "Username";
        }

        return [
            "username" => Yii::t("user", $attribute),
            "password" => Yii::t("user", "Password"),
            "rememberMe" => Yii::t("user", "Remember Me"),
        ];
    }

    /**
     * Validate and log user in
     *
     * @param int $loginDuration
     * @return bool
     */
    public function login($loginDuration) {

        if ($this->validate()) {
            $_user = $this->getUser();
            $usertype = $_user->user_type;
            \Yii::$app->session->set('user_type', $usertype);
            if ($usertype == "S") {
                \Yii::$app->session->set('stu_id', $_user->user_id);
                \Yii::$app->session->set('usertype', "S");
            } else if ($usertype == "E") {
                \Yii::$app->session->set('emp_id', $_user->user_id);
                \Yii::$app->session->set('usertype', "E");
            } else if ($usertype == "P") {
                \Yii::$app->session->set('par_id', $_user->user_id);
                \Yii::$app->session->set('usertype', "P");
            } else if (!in_array($usertype, ['P', 'S', 'E'])) {
                \Yii::$app->session->set('usertype', "A");
                \Yii::$app->session->set('admin_user', $_user->user_id);
            } else {
                
            }
            \Yii::$app->session->set('exportData', array());


            return Yii::$app->user->login($_user, $this->rememberMe ? $loginDuration : 0);
        }

        return false;
    }

}
