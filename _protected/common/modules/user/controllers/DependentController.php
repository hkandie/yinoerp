<?php


namespace common\modules\user\controllers;
use yii\helpers\Html;

class DependentController extends \yii\web\Controller
{

	/*  Get dependent dropdown for  country wise State List.   city\_form.php  */
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
    public function actionGetstate($id)
	{
		$rows = \common\modules\settings\models\State::find()->where(['state_country_id' => $id,'is_status'=>0])->all();	 
		echo "<option value=''>---Select State---</option>";	 
		if(count($rows)>0){
		    foreach($rows as $row){
		        echo "<option value='$row->state_id'>$row->state_name</option>";
		    }
		}
		else{
		    echo "";
		} 
    	}
	/*  Get dependent dropdown for  state wise City List.   city\_form.php  */
	public function actionGetcity($id){
		$rows = \app\models\City::find()->where(['state_id' => $id,'is_status'=>0])->all();	 
		echo "<option value=''>---Select City---</option>";	 
		if(count($rows)>0){
		    foreach($rows as $row){
		        echo "<option value='$row->city_id'>$row->city_name</option>";
		    }
		}
		else{
		    echo "";
		}
 
    	}

	/*  Get Organization State on Dependent */
	public function actionGetorgstate($id)
	{
		$rows = \common\modules\settings\models\State::find()->where(['country_id' => $id,'is_status'=>0])->ALL();	
		echo Html::tag('option', Html::encode('---Select State---'), ['value'=>'']); 
		foreach($rows as $row)
			echo Html::tag('option',Html::encode($row->state_name), ['value'=>$row->state_id]); 
    	}
	/*  Get dependent dropdown for  state wise City List.   city\_form.php  */
	public function actionGetorgcity($id)
	{
		$rows = \app\models\City::find()->where(['state_id' => $id,'is_status'=>0])->ALL();	 
		echo Html::tag('option', Html::encode('---Select City---'), ['value'=>'']); 	 
		    foreach($rows as $row)
			echo Html::tag('option', Html::encode($row->city_name), ['value'=>$row->city_id]); 
 
    	}
	public function actionStudbatch($id)
	{
		$rows = \common\modules\course\models\Batches::find()->where(['batch_course_id' => $id, 'is_status' => 0])->all();
	 
		echo "<option value=''>---Select Batch---</option>";
	 
		if(count($rows)>0){
		    foreach($rows as $row){
		        echo "<option value='$row->batch_id'>$row->batch_name</option>";
		    }
		}
		else{
		    echo "";
		}
 
    	}

	// get student section based on batch selection -------------------

	public function actionStudsection($id)
	{
		$rows = \common\modules\course\models\Section::find()->where(['section_batch_id' => $id, 'is_status' => 0])->all();
	 
		echo "<option value=''>---Select Section---</option>";
	 
		if(count($rows)>0){
		    foreach($rows as $row){
		        echo "<option value='$row->section_id'>$row->section_name</option>";
		    }
		}
		else{
		    echo "";
		}
 
    	}


   public function actionIndex()
    {
        return $this->render('index');
    }

}
