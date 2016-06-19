<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\address\models\AddressReference */

$this->title = $model->address_reference_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Address References'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-reference-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->address_reference_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->address_reference_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'address_reference_id',
            'address_id',
            'reference_table',
            'reference_id',
            'status',
            'company_id',
        ],
    ]) ?>

</div>
