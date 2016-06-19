<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\address\models\AddressReference */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Address Reference',
]) . $model->address_reference_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Address References'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->address_reference_id, 'url' => ['view', 'id' => $model->address_reference_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="address-reference-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
