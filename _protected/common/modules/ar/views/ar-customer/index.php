<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ar Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ar-customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ar Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ar_customer_id',
            'customer_number',
            'customer_name',
            'customer_relationship',
            'alt_name',
            // 'supplier_id',
            // 'customer_type',
            // 'customer_category',
            // 'tax_country',
            // 'tax_reg_no',
            // 'tax_payer_id',
            // 'ship_to_id',
            // 'bill_to_id',
            // 'customer_contact_id',
            // 'customer_credit_class',
            // 'profile_name',
            // 'status',
            // 'rev_enabled_cb',
            // 'rev_number',
            // 'created_by',
            // 'creation_date',
            // 'last_update_by',
            // 'last_update_date',
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
