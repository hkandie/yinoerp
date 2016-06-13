<?php

namespace common\modules\user\controllers;

use Yii;
use common\modules\user\models\User;
use common\modules\user\models\UsersOffice;
use common\modules\user\models\UserKey;
use common\modules\user\models\UserAuth;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminController implements the CRUD actions for User model.
 */
class AdminController extends Controller {
    /**
     * @inheritdoc
     */

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * List all User models
     *
     * @return mixed
     */
    public function actionIndex() {
        /** @var \common\modules\user\models\search\UserSearch $searchModel */
        $searchModel = Yii::$app->getModule("user")->model("UserSearch");
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'searchModel' => $searchModel,
        ]);
    }

    /**
     * Display a single User model
     *
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'user' => $this->findModel($id),
        ]);
    }

    /**
     * Create a new User model. If creation is successful, the browser will
     * be redirected to the 'view' page.
     *
     * @return mixed
     */
    public function actionCreate() {
        /** @var \common\modules\user\models\User $user */
        /** @var \common\modules\user\models\Profile $profile */
        $user = Yii::$app->getModule("user")->model("User");
        $user->setScenario("admin");
        $profile = Yii::$app->getModule("user")->model("Profile");
        $userBranch = new UsersOffice();

        $post = Yii::$app->request->post();
        if ($user->load($post) && $user->validate() && $profile->load($post) && $profile->validate()) {
           $user->user_type="U";
            $user->save(false);
            $profile->setUser($user->id)->save(false);
            $formDetails = Yii::$app->request->post('UsersOffice');            
            foreach ($formDetails as $i => $formDetail) {
                foreach ($formDetail as $detail) {
                    for ($x = 0; $x < count($detail); $x++) {
                        if (isset($detail[$x])) {
                            $userBranch = new UsersOffice();
                            $userBranch->user_id = $user->user_id;
                            $userBranch->office_id = $detail[$x];
                            $userBranch->save(false);
                        }
                    }
                }
            }

            return $this->redirect(['view', 'id' => $user->id]);
        }

        // render
        return $this->render('create', [
                    'user' => $user,
                    'profile' => $profile,
                    'userBranch' => $userBranch,
        ]);
    }

    /**
     * Update an existing User model. If update is successful, the browser
     * will be redirected to the 'view' page.
     *
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id) {
        // set up user and profile
        $user = $this->findModel($id);
        $user->setScenario("admin");
        $profile = $user->profile;
        $userBranch = new UsersOffice();

        // load post data and validate
        $post = Yii::$app->request->post();

        if ($user->load($post) && $user->validate() && $profile->load($post) && $profile->validate()) {
            $user->save(false);
            $profile->setUser($user->id)->save(false);
            $formDetails = Yii::$app->request->post('UsersOffice');
            UsersOffice::deleteAll('user_id =' . $user->user_id);
            foreach ($formDetails as $i => $formDetail) {
                foreach ($formDetail as $detail) {
                    for ($x = 0; $x < count($detail); $x++) {
                        if (isset($detail[$x])) {
                            $userBranch = new UsersOffice();
                            $userBranch->user_id = $user->user_id;
                            $userBranch->office_id = $detail[$x];
                            $userBranch->save(false);
                        }
                    }
                }
            }


            return $this->redirect(['view', 'id' => $user->id]);
        }


        // render
        return $this->render('update', [
                    'user' => $user,
                    'profile' => $profile,
                    'userBranch' => $userBranch,
        ]);
    }

    /**
     * Delete an existing User model. If deletion is successful, the browser
     * will be redirected to the 'index' page.
     *
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id) {
        // delete profile and userkeys first to handle foreign key constraint
        $user = $this->findModel($id);
        $profile = $user->profile;
        UserKey::deleteAll(['user_id' => $user->id]);
        UserAuth::deleteAll(['user_id' => $user->id]);
        UsersOffice::deleteAll('user_id =' . $user->user_id);
        $profile->delete();
        $user->delete();

        return $this->redirect(['index']);
    }

    /**
     * Find the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param string $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
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
