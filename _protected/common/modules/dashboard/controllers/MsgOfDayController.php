<?php

/**
 * MsgOfDayController implements the CRUD actions for MsgOfDay model.
 *
 * @package EduSec.modules.dashboard.controllers
 */

namespace common\modules\dashboard\controllers;

use Yii;
use common\modules\dashboard\models\MsgOfDay;
use common\modules\dashboard\models\MsgOfDaySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\bootstrap\ActiveForm;
use yii\helpers\Json;
use pheme\grid\actions\ToggleAction;

class MsgOfDayController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actions() 
    {
	    return [
		'toggle' => [
		    'class' => ToggleAction::className(),
		    'modelClass' => 'common\modules\dashboard\models\MsgOfDay',
		    'attribute' => 'is_status',
		    'type'=> 'toggle-status',
		    // Uncomment to enable flash messages
		    'setFlash' => true,
		],
	    ];
    }
    /**
     * Lists all MsgOfDay models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MsgOfDaySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MsgOfDay model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MsgOfDay model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MsgOfDay();

        if ($model->load(Yii::$app->request->post())) {
		if (Yii::$app->request->isAjax) {
                        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                        return ActiveForm::validate($model);
       		}

		$model->attributes = $_POST['MsgOfDay'];
		$model->created_by = Yii::$app->getid->getId();
		$model->created_at = new \yii\db\Expression('NOW()');
		if($model->is_status == 0) {
			$model->updateAll(['is_status' => 1], 'is_status <> 2');
			$model->is_status = 0;
		}
		if($model->save())
			return $this->redirect(['index']);
		else
			return $this->render('create', ['model' => $model,]);
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MsgOfDay model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
		if (Yii::$app->request->isAjax) {
                        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                        return ActiveForm::validate($model);
       		}
		$model->attributes = $_POST['MsgOfDay'];
		$model->updated_by = Yii::$app->getid->getId();
		$model->updated_at = new \yii\db\Expression('NOW()');
		if($_POST['MsgOfDay']['is_status'] == 0) {
			$model->updateAll(['is_status' => 1], 'is_status = 0');
			$model->is_status = 0;
		}
		if($model->save()) {
			return $this->redirect(['index']);
                }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MsgOfDay model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
       // $this->findModel($id)->delete();
	$model = MsgOfDay::findOne($id);
	$model->is_status = 2;
	$model->updated_by = Yii::$app->getid->getId();
	$model->updated_at = new \yii\db\Expression('NOW()');
	$model->save();
        return $this->redirect(['index']);
    }

    /**
     * Finds the MsgOfDay model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MsgOfDay the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MsgOfDay::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
