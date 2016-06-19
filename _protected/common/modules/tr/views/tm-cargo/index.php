<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\modules\tr\models\TmCargoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tm Cargos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tm-cargo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tm Cargo'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'cargo_id',
            'from_company',
            'from_street',
            // 'from_address_nr',
            // 'from_zipcode',
            // 'from_city:ntext',
            // 'from_state',
            // 'from_country:ntext',
            // 'to_company',
            // 'to_street',
            // 'to_address_nr',
            // 'to_zipcode',
            // 'to_city:ntext',
            // 'to_state',
            // 'to_country:ntext',
            // 'arrival_date',
            // 'price',
            // 'currency',
            // 'cargo_type:ntext',
            // 'transport_type:ntext',
            // 'weight:ntext',
            // 'volume:ntext',
            // 'length',
            // 'height',
            // 'width',
            // 'size',
            // 'description:ntext',
            // 'physical_state',
            // 'notes:ntext',
            // 'tx_date',
            // 'weight_unit',
            // 'volume_unit',
            // 'length_unit',
            // 'height_unit',
            // 'width_unit',
            // 'size_unit',
            // 'image_file_id',
            // 'attach_id_values',
            // 'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
