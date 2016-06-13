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
    public $oldpassoword;
    public $newpassoword;
    public $password;
    public function rules() {
        return [
            [["oldpassoword", "password", "newpassoword"], "required"],
            ["oldpassoword", "validatePassword"]
        ];
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
        if (!$user->validatePassword($this->oldpassword)) {
            $this->addError("oldpassword", Yii::t("user", "Incorrect password"));
        }
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
