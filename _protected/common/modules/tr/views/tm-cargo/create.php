<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmCargo */

$this->title = Yii::t('app', 'Create Tm Cargo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tm Cargos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-cargo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
