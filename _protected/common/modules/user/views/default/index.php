<?php

use yii\helpers\Html;
use yii\grid\GridView;

$user = Yii::$app->getModule("user")->model("User");
$role = Yii::$app->getModule("user")->model("Role");

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\modules\user\models\search\UserSearch $searchModel
 * @var common\modules\user\models\User $user
 * @var common\modules\user\models\Role $role
 */
$this->title = Yii::t('user', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=
        Html::a(Yii::t('user', 'Create {modelClass}', [
                    'modelClass' => 'User',
                ]), ['create'], ['class' => 'btn btn-success'])
        ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'attribute' => 'profile.last_name',
                'label' => "Name",
                'value' => function($user) {
                    return is_object($user->profile) ? $user->profile->first_name . ' ' . $user->profile->last_name : "";
                },
            ],
            'email:email',
            'profile.note',
            'profile.min_hire_cost:currency',
            'profile.max_hire_cost:currency',
                        'profile.town',
            // 'password',
            // 'auth_key',
            // 'api_key',
            // 'login_ip',
            // 'login_time',
            // 'create_ip',
            // 'created_at',
            // 'updated_at',
            // 'ban_time',
            // 'ban_reason',
            // 'created_by',
            // 'updated_by',
            // 'user_type',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
