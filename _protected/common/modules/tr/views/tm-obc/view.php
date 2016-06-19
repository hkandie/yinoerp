<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmObc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Obcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-obc-view">

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
            'startshipping_date',
            'endshipping_date',
            'from_airport:ntext',
            'from_city:ntext',
            'from_country:ntext',
            'to_airport:ntext',
            'to_city:ntext',
            'to_country:ntext',
            'courier_name',
            'user_name',
            'weight',
            'volume',
            'airliner',
            'flight_number',
            'cargo_type',
            'tx_date',
            'price',
            'package_type',
            'currency',
            'obc_id',
            'company_id',
        ],
    ]) ?>

</div>
