<?php

use kartik\widgets\SideNav;
use yii\helpers\Url;

$paths = common\modules\path\models\Path::$icon_stmt_a;
$module_icons = array();
if (!empty($paths)) {
    foreach ($paths as $k => $icon_a) {
        $module_icons[]=["icon"=>"fa ". $icon_a['div_class'],'url'=> Url::base() . '/' . $k,
            'label'=>$icon_a['description']];
        // if (in_array($k, $_SESSION['allowed_modules'])) {
        
        //}
    }
}


echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'iconPrefix'=>'',
    'heading' => 'Transaction Alerts',
    'items' =>$module_icons ,
]);
