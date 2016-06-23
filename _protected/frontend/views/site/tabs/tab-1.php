<?php
use common\modules\path\models\Path;
use yii\helpers\Url;

$paths = Path::$icon_stmt_a;
$module_icons = '<ul id="dashborad_menu">';
if (!empty($paths)) {
    foreach ($paths as $k => $icon_a) {
        // if (in_array($k, $_SESSION['allowed_modules'])) {
        $module_icons .= '<li><k class="circle-frame"><a  class="ajax-link"  href="' . Url::base() . '/' . $k . '">'
                . '<i class="fa ' . $icon_a['div_class'] . '"></i></k><j class="very-small-text">' . ($icon_a['description']) . '</j></a></li>';
        //}
    }
}
$module_icons .= '</ul>';
echo!empty($module_icons) ? $module_icons : ''
?>