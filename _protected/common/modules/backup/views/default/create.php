<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/**
 * @var yii\web\View $this
 * @var common\modules\user\models\User $user
 * @var common\modules\user\models\Profile $profile
 */

$this->title = "Back Up";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="user-form">

    <?php $form = ActiveForm::begin();?>
    
    <div class="row">
        <div class="col-xs-4">
        <?php
        
        echo $form->field($searchForm, 'tablename')->multiselect(($tables), [
            'container' => ['class' => 'sm-white']
        ])->label("Select Tables");
        ?>
        </div>
    </div>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton(Yii::t('user', 'Create'), ['class' =>  'btn btn-primary']) ?>
    </div>

    <?php
    ActiveForm::end();
    ?>

</div>

</div>