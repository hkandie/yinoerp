<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\address\models\AddressReference */

$this->title = Yii::t('app', 'Create Address Reference');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Address References'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-reference-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
