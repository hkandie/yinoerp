<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\tr\models\TmObcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tm Obcs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-obc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tm Obc'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'startshipping_date',
            'endshipping_date',
            'from_airport:ntext',
            'from_city:ntext',
            // 'from_country:ntext',
            // 'to_airport:ntext',
            // 'to_city:ntext',
            // 'to_country:ntext',
            // 'courier_name',
            // 'user_name',
            // 'weight',
            // 'volume',
            // 'airliner',
            // 'flight_number',
            // 'cargo_type',
            // 'tx_date',
            // 'price',
            // 'package_type',
            // 'currency',
            // 'obc_id',
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
