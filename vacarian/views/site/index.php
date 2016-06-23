<?php

use yii\helpers\Url;
use kartik\tabs\TabsX;

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;
$items = [
    [
        'label' => '<i class="glyphicon glyphicon-home"></i>' . Yii::t('app', 'Navigation'),
        'content' => $this->render("tabs/tab-1"),
        'active' => true
    ],
    [
        'label' => '<i class="glyphicon glyphicon-user"></i> ' . Yii::t('app', 'Quick Info'),
        'content' => $this->render("tabs/tab-2"),
    ],
    [
        'label' => '<i class="fa fa-money"></i> ' . Yii::t('app', 'On hand'),
        'content' => $this->render("tabs/tab-3"),
    ],
    [
        'label' => '<i class="fa fa-cubes"></i> ' . Yii::t('app', 'Open PO'),
        'content' => $this->render("tabs/tab-4"),
    ],
    [
        'label' => '<i class="fa fa-filter"></i> ' . Yii::t('app', 'Sales Funnel'),
        'content' => $this->render("tabs/tab-5"),
    ],
    [
        'label' => '<i class="fa fa-tasks"></i> ' . Yii::t('app', 'WIP Value' ),
        'content' => $this->render("tabs/tab-6"),
    ],
    [
        'label' => '<i class="fa fa-credit-card"></i> ' . Yii::t('app', 'Supplier Liability'),
        'content' => $this->render("tabs/tab-7"),
    ],
    [
        'label' => '<i class="fa fa-dollar"></i> ' . Yii::t('app', 'Customer Balance'),
        'content' => $this->render("tabs/tab-8"),
    ],
];
?>
<div class="site-default-index">
    <div class="row">
        <?php
        echo TabsX::widget([
            'items' => $items,
            'position' => TabsX::POS_ABOVE,
            'encodeLabels' => false
        ]);
        ?>
    </div>

    <?php
    if (!empty($ino_user->use_personal_db_cb)) {
        include_once __DIR__ . DS . 'templates/user_dashboard_template.php';
        return;
    }
    ?>
    <div id ="user_dashboard_divId">
    </div>    

</div>
