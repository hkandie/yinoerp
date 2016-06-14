<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\ar\models\ArCustomer */

$this->title = 'Create Ar Customer';
$this->params['breadcrumbs'][] = ['label' => 'Ar Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ar-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
