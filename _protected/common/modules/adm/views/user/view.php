<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\modules\user\models\User $user
 */
$this->title = $user->profile->fullName;
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('user', 'Update'), ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('user', 'Delete'), ['delete', 'id' => $user->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('user', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $user,
        'attributes' => [
            [
                "attribute" => "role_id",
                "label" => "Role",
                "value" => $user->role->name,
            ],
            [
                "attribute" => "status",
                "label" => "Status",
                "value" => ($user->status == 1) ? " Active" : "In Active",
            ],
            'email:email',
            'username',
            'profile.first_name',
            'profile.last_name',
        ],
    ])
    ?>
    <table class="table table-bordered">
    </table>

</div>
