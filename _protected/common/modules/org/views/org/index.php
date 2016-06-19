<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\org\models\OrgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Orgs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="org-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Org'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'org_id',
            'org',
            'code',
            'type',
            'description',
            // 'enterprise_org_id',
            // 'legal_org_id',
            // 'business_org_id',
            // 'inventory_org_id',
            // 'ef_id',
            // 'status',
            // 'rev_enabled',
            // 'rev_number',
            // 'address_id',
            // 'created_by',
            // 'creation_date',
            // 'last_update_by',
            // 'last_update_date',
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
