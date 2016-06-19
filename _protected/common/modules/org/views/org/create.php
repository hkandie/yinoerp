<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\org\models\Org */

$this->title = Yii::t('app', 'Create Org');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Orgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="org-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
