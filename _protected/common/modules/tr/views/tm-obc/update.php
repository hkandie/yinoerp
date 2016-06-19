<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmObc */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tm Obc',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Obcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tm-obc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
