<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\ar\models\ArCustomer */

$this->title = $model->ar_customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ar-customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ar_customer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ar_customer_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ar_customer_id',
            'customer_number',
            'customer_name',
            'customer_relationship',
            'alt_name',
            'supplier_id',
            'customer_type',
            'customer_category',
            'tax_country',
            'tax_reg_no',
            'tax_payer_id',
            'ship_to_id',
            'bill_to_id',
            'customer_contact_id',
            'customer_credit_class',
            'profile_name',
            'status',
            'rev_enabled_cb',
            'rev_number',
            'created_by',
            'creation_date',
            'last_update_by',
            'last_update_date',
            'company_id',
        ],
    ]) ?>

</div>
