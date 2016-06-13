<?php
/**
 * NoticeController implements the CRUD actions for Notice model.
 *
 * @package EduSec.modules.dashboard.controllers
 */

namespace common\modules\dashboard\controllers;

use Yii;
use common\modules\dashboard\models\Notice;
use common\modules\dashboard\models\NoticeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\bootstrap\ActiveForm;
use yii\helpers\Json;
use yii\web\UploadedFile;
use pheme\grid\actions\ToggleAction;

class NoticeController extends Controller
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
		    'modelClass' => 'common\modules\dashboard\models\Notice',
		    'attribute' => 'is_status',
		    // Uncomment to enable flash messages
		    'setFlash' => true,
		],
	    ];
    }
    /**
     * Lists all Notice models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NoticeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Notice model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionViewPopup($id)
    {
	 return $this->renderAjax('view-popup', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Notice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Notice();

	if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax) {
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ActiveForm::validate($model);
       	}
        if ($model->load(Yii::$app->request->post())) {		
		
		$model->attributes = $_POST['Notice'];
		$model->notice_date = date('Y-m-d', strtotime($_POST['Notice']['notice_date']));
		$model->created_by = Yii::$app->getid->getId();
		$model->created_at= new \yii\db\Expression('NOW()');
		$model->notice_file_path = UploadedFile::getInstance($model,'notice_file_path');
		if($model->notice_file_path)
		{
			$model->notice_file_path->saveAs(Yii::getAlias('@webroot').'/site/data/notice/'.$model->notice_file_path = 'Notice_'.date("d-m-Y_His").'.'.$model->notice_file_path->extension);
		}
		else
			$model->notice_file_path = NULL;	

			if($model->save(false))
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
     * Updates an existing Notice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	$old_model = $this->findModel($id);

	if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax) {
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ActiveForm::validate($model);
       	}
        if ($model->load(Yii::$app->request->post())) {
		
		$model->attributes = $_POST['Notice'];
		$model->notice_date = Yii::$app->dateformatter->getDateFormat($_POST['Notice']['notice_date']);
		$model->notice_file_path = UploadedFile::getInstance($model,'notice_file_path');

		if($model->notice_file_path)
		{
			$Dfile = Yii::getAlias('@webroot').'/site/data/notice/'.$old_model->notice_file_path;
			if(is_file($Dfile) && file_exists($Dfile)) {
				unlink($Dfile);
			}
			$model->notice_file_path->saveAs(Yii::getAlias('@webroot').'/site/data/notice/'.$model->notice_file_path = 'Notice_'.date("d-m-Y_His").'.'.$model->notice_file_path->extension);
		}
		else
			$model->notice_file_path = $old_model->notice_file_path;

		$model->updated_by = Yii::$app->getid->getId();
		$model->updated_at = new \yii\db\Expression('NOW()');
		if($model->save(false))
			return $this->redirect(['view', 'id' => $model->notice_id]);
            
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Notice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = Notice::findOne($id);
	$model->is_status = 2;
	$model->updated_by = Yii::$app->getid->getId();
	$model->updated_at = new \yii\db\Expression('NOW()');
	$model->save();

        return $this->redirect(['index']);
    }

    public function actionNoticeFile( $nid )
    {
	$path = Yii::getAlias('@webroot') . '/site/data/notice/';
	$model = Notice::find()->where('notice_id = '.$nid)->one();
	$nfile = $path.$model->notice_file_path;
	$ext = substr(strrchr($model->notice_file_path,'.'),1);

	if(!empty($model) && file_exists($nfile)) {
		return Yii::$app->response->sendFile($nfile, date('Y-m-dHis').".".$ext);
	}
	else
		throw new NotFoundHttpException('The requested page does not exist.');	

    }

    /**
     * Finds the Notice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Notice::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
