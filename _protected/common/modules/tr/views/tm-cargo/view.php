<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmCargo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Cargos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-cargo-view">

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
            'cargo_id',
            'from_company',
            'from_street',
            'from_address_nr',
            'from_zipcode',
            'from_city:ntext',
            'from_state',
            'from_country:ntext',
            'to_company',
            'to_street',
            'to_address_nr',
            'to_zipcode',
            'to_city:ntext',
            'to_state',
            'to_country:ntext',
            'arrival_date',
            'price',
            'currency',
            'cargo_type:ntext',
            'transport_type:ntext',
            'weight:ntext',
            'volume:ntext',
            'length',
            'height',
            'width',
            'size',
            'description:ntext',
            'physical_state',
            'notes:ntext',
            'tx_date',
            'weight_unit',
            'volume_unit',
            'length_unit',
            'height_unit',
            'width_unit',
            'size_unit',
            'image_file_id',
            'attach_id_values',
            'company_id',
        ],
    ]) ?>

</div>
