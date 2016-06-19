<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmObc */

$this->title = Yii::t('app', 'Create Tm Obc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Obcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-obc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
