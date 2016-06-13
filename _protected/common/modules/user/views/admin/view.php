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
        <tr>
            <th>Name</th>
            <th>IssOffCode</th>
            <th>Office ID</th>
            <th colspan="3">Type</th>
        </tr>

        <?php
        $offices = $user->usersOffice;

        foreach ($offices as $office) {
            $off = $office->office;
            ?>
            <tr>
                <td><?= $off->office_name ?></td>
                <td><?= $off->office_code ?></td>
                <td><?= $off->office_id ?></td>
                <td><?= ($off->is_office == 1) ? "Office" : "" ?></td>
                <td><?= ($off->is_fuel == 1) ? " Fuel Station" : "" ?></td>
                <td><?= ($off->is_loads == 1) ? " Loads Station" : "" ?></td>
            </tr>
        <?php }
        ?>
    </table>

</div>
