<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\tr\models\TmTransportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tm Transports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-transport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tm Transport'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'departure_date',
            'arrival_date',
            'startshipping_date',
            // 'endshipping_date',
            // 'from_city:ntext',
            // 'from_country:ntext',
            // 'to_city:ntext',
            // 'to_country:ntext',
            // 'price',
            // 'currency',
            // 'transport_type:ntext',
            // 'container_type:ntext',
            // 'weight:ntext',
            // 'volume:ntext',
            // 'length',
            // 'height',
            // 'width',
            // 'airfreight_security:ntext',
            // 'shipper:ntext',
            // 'description:ntext',
            // 'notes:ntext',
            // 'tx_date',
            // 'transport_ID:ntext',
            // 'awb:ntext',
            // 'airfreight_security_type',
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
