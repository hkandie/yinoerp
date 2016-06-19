<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmTransport */

$this->title = Yii::t('app', 'Create Tm Transport');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Transports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-transport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
