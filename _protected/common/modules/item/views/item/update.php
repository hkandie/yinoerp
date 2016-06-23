<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\item\models\Item */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Item',
]) . $model->item_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_id, 'url' => ['view', 'id' => $model->item_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
