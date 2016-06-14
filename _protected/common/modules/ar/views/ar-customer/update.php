<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\ar\models\ArCustomer */

$this->title = 'Update Ar Customer: ' . $model->ar_customer_id;
$this->params['breadcrumbs'][] = ['label' => 'Ar Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ar_customer_id, 'url' => ['view', 'id' => $model->ar_customer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ar-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
