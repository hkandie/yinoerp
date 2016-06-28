<?php

namespace common\modules\user\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use common\modules\user\models\User;

/**
 * Default controller for User module
 */
class AuthController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['profile', 'resend-change', 'change', 'passwd', 'cancel', 'logout', 'login', 'register', 'confirm', 'resend', 'forgot', 'reset'],
                'rules' => [
                    [
                        'actions' => ['profile', 'index', 'change', 'passwd', 'resend-change', 'cancel', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['login', 'register', 'confirm', 'resend', 'forgot', 'reset'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Display login page
     */
    public function actionLogin() {
        /** @var \common\modules\user\models\forms\LoginForm $model */
// load post data and login

        $model = Yii::$app->getModule("user")->model("LoginForm");
        if ($model->load(Yii::$app->request->post()) && $model->login(Yii::$app->getModule("user")->loginDuration)) {
            return $this->goBack(Yii::$app->getModule("user")->loginRedirect);
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    public function actionPasswd() {
        /** @var \common\modules\user\models\forms\LoginForm $model */
// load post data and login
        $model = new \common\modules\user\models\forms\PasswdForm;
        if ($model->load(Yii::$app->request->post()) && $model->login(Yii::$app->getModule("user")->loginDuration)) {
            return $this->goBack(Yii::$app->getModule("user")->loginRedirect);
        }
        return $this->render('passwd', [
                    'model' => $model,
        ]);
    }

    /**
     * Log user out and redirect
     */
    public function actionLogout() {
        Yii::$app->user->logout();
        $logoutRedirect = Yii::$app->getModule("user")->logoutRedirect;
        if ($logoutRedirect === null) {
            return $this->goHome();
        } else {
            return $this->redirect($logoutRedirect);
        }
    }

    /**
     * Display registration page
     */
    public function actionRegister() {
        $user = Yii::$app->getModule("user")->model("User", ["scenario" => "register"]);
        $profile = Yii::$app->getModule("user")->model("Profile");

// load post data
        $post = Yii::$app->request->post();
        if ($user->load($post)) {

// ensure profile data gets loaded
            $profile->load($post);

// validate for ajax request
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($user, $profile);
            }
            $profile->gender = "N";
            $profile->middle_name = 'N';
            $profile->title = '';

            if (empty($user->email)) {
                $user->email = $user->username;
            }
            if (empty($user->username)) {
                $user->username = $user->email;
            }
            $profile->avatar = \yii\web\UploadedFile::getInstance($profile, 'avatar');
            $old_photo = "";
            if ($profile->avatar == NULL) {
                $old_photo = $profile->avatar;
                $valid_photo = true;
            } else {
                $valid_photo = true;
            }
            if ($valid_photo) {
                if ($profile->avatar != NULL) {
                    $newfname = '';
                    $ext = substr(strrchr($profile->avatar, '.'), 1);
                    //following thing done for deleting previously uploaded photo
                    $photo = $old_photo;

                    $dir1 = Yii::getAlias('@webroot') . '/uploads/user_images/';
                    if (file_exists($dir1 . $photo) && $photo != NULL) {
                        unlink($dir1 . $photo);
                    }
                    if ($ext != null) {
                        $newfname = date("YMdDHisz") . '.' . $ext;
                        $profile->avatar->saveAs(Yii::getAlias('@webroot') . '/uploads/user_images/' . $profile->avatar = $newfname);
                    }
                }
            } else {
                echo "Errors: " . \yii\helpers\Html::errorSummary($profile);
                return;
            }


// validate for normal request
            if ($profile->validate()) {
// perform registration
                $role = Yii::$app->getModule("user")->model("Role");
                $user->setRegisterAttributes($role::ROLE_USER, Yii::$app->request->userIP)->save(false);
                $profile->setUser($user->id)->save(false);
                $this->afterRegister($user);

// set flash
// don't use $this->refresh() because user may automatically be logged in and get 403 forbidden
                $successText = Yii::t("user", "Successfully registered [ {displayName} ]", ["displayName" => $user->getDisplayName()]);
                $guestText = "";
                if (Yii::$app->user->isGuest) {
                    $guestText = Yii::t("user", " - Please check your email to confirm your account");
                }
                $guestText.=Html::a(Yii::t("user", "Register"), ["/user/auth/register"]);
                $guestText.="<br/>";
                $guestText.=Html::a(Yii::t("user", "Forgot password") . "?", ["/user/auth/forgot"]);
                $guestText.=Html::a(Yii::t("user", "Resend confirmation email"), ["/user/auth/resend"]);
                Yii::$app->session->setFlash("Register-success", $successText . $guestText);
            } else {
                print_r($user->validate());

                return;
            }
        }

// render
        return $this->render("register", [
                    'user' => $user,
                    'profile' => $profile,
        ]);
    }

    /**
     * Process data after registration
     *
     * @param \common\modules\user\models\User $user
     */
    protected function afterRegister($user) {
        /** @var \common\modules\user\models\UserKey $userKey */
// determine userKey type to see if we need to send email
        $userKey = Yii::$app->getModule("user")->model("UserKey");
        if ($user->status == $user::STATUS_INACTIVE) {
            $userKeyType = $userKey::TYPE_EMAIL_ACTIVATE;
        } elseif ($user->status == $user::STATUS_UNCONFIRMED_EMAIL) {
            $userKeyType = $userKey::TYPE_EMAIL_CHANGE;
        } else {
            $userKeyType = null;
        }
        $auth_assign = new \common\modules\settings\models\AuthAssignment;

        if ($user->user_type === "S") {
            $auth_assign->item_name = "Student";
        } else if ($user->user_type === "E") {
            $auth_assign->item_name = "Employee";
        } else if ($user->user_type === "P") {
            $auth_assign->item_name = "Parent";
        }
        $auth_assign->user_id = (string) $user->user_id;
        $auth_assign->created_at = date_format(date_create(), 'U');
        $auth_assign->save();



// check if we have a userKey type to process, or just log user in directly
        if ($userKeyType) {

// generate userKey and send email
            $userKey = $userKey::generate($user->id, $userKeyType);
            if (!$numSent = $user->sendEmailConfirmation($userKey)) {

// handle email error
                Yii::$app->session->setFlash("Email-error", "Failed to send email");
            }
        } else {
            Yii::$app->user->login($user, Yii::$app->getModule("user")->loginDuration);
        }
    }

    /**
     * Confirm email
     */
    public function actionConfirm($key) {
        /** @var \common\modules\user\models\UserKey $userKey */
        /** @var \common\modules\user\models\User $user */
// search for userKey

        $success = false;
        $userKey = Yii::$app->getModule("user")->model("UserKey");
        $userKey = $userKey::findActiveByKey($key, [$userKey::TYPE_EMAIL_ACTIVATE, $userKey::TYPE_EMAIL_CHANGE]);
        if ($userKey) {

// confirm user
            $user = Yii::$app->getModule("user")->model("User");
            $user = $user::findOne($userKey->user_id);
            $user->confirm();

// consume userKey and set success
            $userKey->consume();
            $success = $user->email;
        }

// render
        return $this->render("confirm", [
                    "userKey" => $userKey,
                    "success" => $success
        ]);
    }

    /**
     * Account
     */
    public function actionAccount() {
        
    }

    /**
     * Profile
     */
    public function actionProfile() {
        $user = User::find(Yii::$app->user->id)->one();
        $profile = $user->profile;
        $addressReference = $user->addressReference;
        $address = new \common\modules\address\models\Address;
        if (Yii::$app->request->isAjax && $user->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
           echo "Errors: " . json_encode($user);
        }
        if (Yii::$app->request->isAjax && $profile->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ActiveForm::validate($profile);
        }
        if (Yii::$app->request->isAjax && $address->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ActiveForm::validate($address);
        }
       
// load post data
        $post = Yii::$app->request->post();
        if ($user->load($post) && $user->validate() && $profile->load($post) && $profile->validate()) {

            $user->save(false);
            $profile->setUser($user->id)->save(false);
            $profile->avatar = \yii\web\UploadedFile::getInstance($profile, 'avatar');
            $old_photo = "";
            if ($profile->avatar == NULL) {
                $old_photo = $profile->avatar;
                $valid_photo = true;
            } else {
                $valid_photo = true;
            }
            if ($valid_photo) {
                if ($profile->avatar != NULL) {
                    $newfname = '';
                    $ext = substr(strrchr($profile->avatar, '.'), 1);
                    //following thing done for deleting previously uploaded photo
                    $photo = $old_photo;

                    $dir1 = Yii::getAlias('@webroot') . '/uploads/user_images/';
                    if (file_exists($dir1 . $photo) && $photo != NULL) {
                        unlink($dir1 . $photo);
                    }
                    if ($ext != null) {
                        $newfname = date("YMdDHisz") . '.' . $ext;
                        $profile->avatar->saveAs(Yii::getAlias('@webroot') . '/uploads/user_images/' . $profile->avatar = $newfname);
                        $profile->setUser($user->id)->save(false);
                    }
                }
            }
        }
        return $this->render("profile", [
                    'user' => $user,
                    'profile' => $profile,
                    'addressReference' => $addressReference,
                    'address' => $address,
        ]);
    }

    /**
     * Resend email confirmation
     */
    public function actionResend() {
        /** @var \common\modules\user\models\forms\ResendForm $model */
// load post data and send email
        $model = Yii::$app->getModule("user")->model("ResendForm");
        if ($model->load(Yii::$app->request->post()) && $model->sendEmail()) {

// set flash (which will show on the current page)
            Yii::$app->session->setFlash("Resend-success", Yii::t("user", "Confirmation email resent"));
        }

// render
        return $this->render("resend", [
                    "model" => $model,
        ]);
    }

    /**
     * Resend email change confirmation
     */
    public function actionResendChange() {
        /** @var \common\modules\user\models\User    $user */
        /** @var \common\modules\user\models\UserKey $userKey */
// find userKey of type email change
        $user = Yii::$app->user->identity;
        $userKey = Yii::$app->getModule("user")->model("UserKey");
        $userKey = $userKey::findActiveByUser($user->id, $userKey::TYPE_EMAIL_CHANGE);
        if ($userKey) {

// send email and set flash message
            $user->sendEmailConfirmation($userKey);
            Yii::$app->session->setFlash("Resend-success", Yii::t("user", "Confirmation email resent"));
        }

// redirect to account page
        return $this->redirect(["/user/account"]);
    }

    /**
     * Cancel email change
     */
    public function actionCancel() {
        /** @var \common\modules\user\models\User    $user */
        /** @var \common\modules\user\models\UserKey $userKey */
// find userKey of type email change
        $user = Yii::$app->user->identity;
        $userKey = Yii::$app->getModule("user")->model("UserKey");
        $userKey = $userKey::findActiveByUser($user->id, $userKey::TYPE_EMAIL_CHANGE);
        if ($userKey) {

// remove `user.new_email`
            $user->new_email = null;
            $user->save(false);

// expire userKey and set flash message
            $userKey->expire();
            Yii::$app->session->setFlash("Cancel-success", Yii::t("user", "Email change cancelled"));
        }

// go to account page
        return $this->redirect(["/user/account"]);
    }

    /**
     * Forgot password
     */
    public function actionForgot() {
        /** @var \common\modules\user\models\forms\ForgotForm $model */
// load post data and send email

        $model = Yii::$app->getModule("user")->model("ForgotForm");
        if ($model->load(Yii::$app->request->post()) && $model->sendForgotEmail()) {

// set flash (which will show on the current page)
            Yii::$app->session->setFlash("Forgot-success", Yii::t("user", "Instructions to reset your password have been sent"));
        }

// render
        return $this->render("forgot", [
                    "model" => $model,
        ]);
    }

    /**
     * Forgot password
     */
    public function actionChange() {
        /** @var \common\modules\user\models\forms\ForgotForm $model */
// load post data and send email

        $model = Yii::$app->getModule("user")->model("ForgotForm");
        if ($model->load(Yii::$app->request->post()) && $model->sendForgotEmail()) {

// set flash (which will show on the current page)
            Yii::$app->session->setFlash("Forgot-success", Yii::t("user", "Instructions to reset your password have been sent"));
        }

// render
        return $this->render("forgot", [
                    "model" => $model,
        ]);
    }

    /**
     * Reset password
     */
    public function actionReset($key) {
        /** @var \common\modules\user\models\User    $user */
        /** @var \common\modules\user\models\UserKey $userKey */
        $userKey = Yii::$app->getModule("user")->model("UserKey");
        $userKey = $userKey::findActiveByKey($key, $userKey::TYPE_PASSWORD_RESET);
        if (!$userKey) {
            return $this->render('reset', ["invalidKey" => true]);
        }

// get user and set "reset" scenario
        $success = false;
        $user = Yii::$app->getModule("user")->model("User");
        $user = $user::findOne($userKey->user_id);
        $user->setScenario("reset");

// load post data and reset user password
        if ($user->load(Yii::$app->request->post()) && $user->save()) {

// consume userKey and set success = true
            $userKey->consume();
            $success = true;
        }

// render
        return $this->render('reset', compact("user", "success"));
    }

    public function actionUpdate($id) {
        // set up user and profile
        $user = $this->findModel($id);
        $user->setScenario("admin");
        $profile = $user->profile;
        if (Yii::$app->request->isAjax && $user->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ActiveForm::validate($user);
        }
        if (Yii::$app->request->isAjax && $profile->load(Yii::$app->request->post())) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return ActiveForm::validate($profile);
        }

        // load post data and validate
        $post = Yii::$app->request->post();
        if ($user->load($post) && $user->validate() && $profile->load($post) && $profile->validate()) {
            $user->save(false);
            $profile->setUser($user->id)->save(false);
            return $this->redirect(['profile', 'id' => $user->id]);
        }

        // render
        return $this->renderAjax('update', [
                    'user' => $user,
                    'profile' => $profile,
        ]);
    }

    protected function findModel($id) {
        /** @var \common\modules\user\models\User $user */
        $user = Yii::$app->getModule("user")->model("User");
        if (($user = $user::findOne($id)) !== null) {
            return $user;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
