<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmTransport */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Transports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-transport-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'user_id',
            'departure_date',
            'arrival_date',
            'startshipping_date',
            'endshipping_date',
            'from_city:ntext',
            'from_country:ntext',
            'to_city:ntext',
            'to_country:ntext',
            'price',
            'currency',
            'transport_type:ntext',
            'container_type:ntext',
            'weight:ntext',
            'volume:ntext',
            'length',
            'height',
            'width',
            'airfreight_security:ntext',
            'shipper:ntext',
            'description:ntext',
            'notes:ntext',
            'tx_date',
            'transport_ID:ntext',
            'awb:ntext',
            'airfreight_security_type',
            'company_id',
        ],
    ]) ?>

</div>
