<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\org\models\Org */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Org',
]) . $model->org_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Orgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->org_id, 'url' => ['view', 'id' => $model->org_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="org-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
