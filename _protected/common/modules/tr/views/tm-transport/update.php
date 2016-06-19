<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmTransport */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tm Transport',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Transports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tm-transport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
