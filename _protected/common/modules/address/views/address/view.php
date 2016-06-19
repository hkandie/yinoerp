<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\address\models\Address */

$this->title = $model->address_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->address_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->address_id], [
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
            'address_id',
            'type',
            'address_name',
            'mdm_tax_region_id',
            'description',
            'phone',
            'email:email',
            'website',
            'address:ntext',
            'country',
            'postal_code',
            'default_cb',
            'status',
            'usage_type',
            'rev_number',
            'created_by',
            'creation_date',
            'last_update_by',
            'last_update_date',
            'company_id',
        ],
    ]) ?>

</div>
