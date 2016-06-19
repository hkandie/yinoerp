<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\modules\org\models\Org */

$this->title = $model->org_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Orgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="org-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->org_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->org_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'org_id',
            'org',
            'code',
            'type',
            'description',
            'enterprise_org_id',
            'legal_org_id',
            'business_org_id',
            'inventory_org_id',
            'ef_id',
            'status',
            'rev_enabled',
            'rev_number',
            'address_id',
            'created_by',
            'creation_date',
            'last_update_by',
            'last_update_date',
            'company_id',
        ],
    ]) ?>

</div>
