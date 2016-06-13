<?php

use kartik\widgets\ActiveForm;
use kartik\builder\FormGrid;
use kartik\builder\Form;
use yii\helpers\Html;
use kartik\builder\TabularForm;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use \yii\data\SqlDataProvider;

$role = Yii::$app->getModule("user")->model("Role");

/**
 * @var yii\web\View $this
 * @var common\modules\user\models\User $user
 * @var common\modules\user\models\Profile $profile
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php
    $form = ActiveForm::begin();
    echo FormGrid::widget([
        'model' => $user,
        'form' => $form,
        'autoGenerateColumns' => true,
        'rows' => [
            [
                'attributes' => [
                    'username' => ['type' => Form::INPUT_TEXT,],
                    'email' => ['type' => Form::INPUT_TEXT,],
                    'status' => [
                        'type' => Form::INPUT_DROPDOWN_LIST,
                        'items' => [0 => "Active", 1 => "In Active"]
                    ],
                    'role_id' => [
                        'type' => Form::INPUT_DROPDOWN_LIST,
                        'items' => ArrayHelper::map(common\modules\user\models\Role::find()->orderBy('name')->asArray()->all(), 'id', 'name')
                    ],
                ],
            ],
        ]
    ]);
    echo FormGrid::widget([
        'model' => $profile,
        'form' => $form,
        'autoGenerateColumns' => true,
        'rows' => [
            ['attributes' => [

                    'first_name' => ['type' => Form::INPUT_TEXT,],
                    'last_name' => ['type' => Form::INPUT_TEXT,],
                    'phone' => ['type' => Form::INPUT_TEXT,],
                ],
            ],
        ]
    ]);
    ?>
    <div class="row">
        <div class="col-xs-4">
        <?php
        $offices= \common\modules\user\models\UsersOffice::find()->select("office_id")->where(['user_id' => $user->user_id])->asArray()->all();
        if(count($offices)>0){
        $userBranch->office_id=$offices;
        }
        echo $form->field($userBranch, '[0]office_id')->multiselect(ArrayHelper::map(common\modules\prtl\models\Office::find()->where(['is_office' => 1])->all(), 'id', 'office_name'), [
            'container' => ['class' => 'sm-white']
        ])->label("Allowed Reconcilation Station");
        ?>
        </div>
        <div class="col-xs-4">
        <?php
        echo $form->field($userBranch, '[1]office_id')->multiselect(ArrayHelper::map(common\modules\prtl\models\Office::find()->where(['is_fuel' => 1])->all(), 'id', 'office_name'), [
            'container' => ['class' => 'sm-white']
        ])->label("Allowed Dailylog Station");
        ?>
        </div>
        <div class="col-xs-4">
        <?php
        echo $form->field($userBranch, '[2]office_id')->multiselect(ArrayHelper::map(common\modules\prtl\models\Office::find()->where(['is_loads' => 1])->all(), 'id', 'office_name'), [
            'container' => ['class' => 'sm-white']
        ])->label("Allowed Loads Station");
        ?>
    </div>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php
    ActiveForm::end();
    ?>

</div>
