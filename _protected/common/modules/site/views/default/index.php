<?php

use yii\helpers\Url;
use common\modules\block\models\Block;
use common\modules\block\models\BlockContent;
use common\modules\wip\models\WipWoHeader;

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-default-index">
    
    <?php
    if (!empty($ino_user->use_personal_db_cb)) {
        include_once __DIR__ . DS . 'templates/user_dashboard_template.php';
        return;
    }
    ?>
    <link href="<?php echo Url::base(); ?>includes/ecss/getsvgimage.css" media="all" rel="stylesheet" type="text/css" />
    <div id ="user_dashboard_divId">
        <div id="tabsHeader">
            <form method="post" id="user_header" name="user_header"><span class="heading"><?php echo Yii::t('app', 'User Dashboard ') ?>
                    <a href="<?php echo Url::base() ?>form.php?class_name=user_dashboard_config&mode=9" 
                       class='fa fa-cog getAjaxForm'></a>
                </span>
                <div id="tabsHeader">
                    <ul class="tabMain">
                        <li><a href="#tabsHeader-1"><?php echo Yii::t('app', 'Navigation') ?></a></li>
                        <li><a href="#tabsHeader-2"><?php echo Yii::t('app', 'Quick Info ') ?></a></li>
                        <li><a href="#tabsHeader-3" class="get-report-content" data-report_id="3"><?php echo Yii::t('app', 'On hand') ?></a></li>
                        <li><a href="#tabsHeader-4" class="get-report-content" data-report_id="5"><?php echo Yii::t('app', 'Open PO') ?></a></li>
                        <li><a href="#tabsHeader-5" class="get-report-content" data-report_id="4"><?php echo Yii::t('app', 'Sales Funnel') ?></a></li>
                        <li><a href="#tabsHeader-6"><?php echo Yii::t('app', 'WIP Value') ?></a></li>
                        <li><a href="#tabsHeader-7" class="get-report-content" data-report_id="1"><?php echo Yii::t('app', 'Supplier Liability') ?></a></li>
                        <li><a href="#tabsHeader-8" class="get-report-content" data-report_id="6"><?php echo Yii::t('app', 'Customer Balance') ?></a></li>
                    </ul>
                    <div class="tabContainer"> 
                        <div id="tabsHeader-1" class="tabContent">
                            <?php
                            $paths = common\modules\path\models\Path::$icon_stmt_a;
                            $module_icons = '<ul id="dashborad_menu">';
                            if (!empty($paths)) {
                                foreach ($paths as $k => $icon_a) {
                                    // if (in_array($k, $_SESSION['allowed_modules'])) {
                                    $module_icons .= '<li><k class="circle-frame"><a  class="ajax-link"  href="' .Url::base().'/'. $k . '">'
                                            . '<i class="fa ' . $icon_a['div_class'] . '"></i></k><j class="very-small-text">' . ($icon_a['description']) . '</j></a></li>';
                                    //}
                                }
                            }
                            $module_icons .= '</ul>';
                            echo!empty($module_icons) ? $module_icons : ''
                            ?>
                        </div>
                        <div id="tabsHeader-2" class="tabContent">
                            <ul class="column three_column">
                                <li>
                                    <h2>Notifications</h2>
                                    <?php
                                    $block_i = Block::findOne('55');
//                                    if ($block_i->reference_table === 'block_content') {
//                                        $block_content_details = BlockContent::findOne($block_id);
//                                        $block_content = $block_content_details->content;
//                                    } else {
//                                        $class_containg_block = new $block_i->reference_table;
//                                        $method_name = $block_i->name . '_block';
//                                        $parameters['block_id'] = $block_i->block_id;
//                                        $block_content = call_user_func(array($class_containg_block, $method_name), $parameters);
//                                    }
                                    ?>
                                </li>
                                <li>
                                    <h2>Recent Comments</h2>
                                    <?php
                                    $block_i = Block::findOne('52');
//                                    if ($block_i->reference_table === 'block_content') {
//                                        $block_content_details = BlockContent::findOne(52);
//                                        $block_content = $block_content_details->content;
//                                    } else {
//                                        $class_containg_block = new $block_i->reference_table;
//                                        $method_name = $block_i->name . '_block';
//                                        $parameters['block_id'] = $block_i->block_id;
//                                        $block_content = call_user_func(array($class_containg_block, $method_name), $parameters);
//                                    }
                                    ?>
                                </li>
                                <li>
                                    <a title='Update Favourite' href="<?php echo Url::base() ?>form.php?class_name=user_favourite&mode=9"><h2>Favourites 
                                            <i class="fa fa-edit"> </i></h2></a>
                                    <?php
                                    // echo $fav->show_currentUser_fav();
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div id="tabsHeader-3" class="tabContent"></div>
                        <div id="tabsHeader-4" class="tabContent"></div>
                        <div id="tabsHeader-5" class="tabContent"></div>
                        <div id="tabsHeader-6" class="tabContent">
                            <div>                
                                <?php
                                $raw = new WipWoHeader();
//                                $legend_w = [];
//                                $chart_a_w = [];
//                                $reports_w = $raw->ra_report_set_wip();
//                                $chart_settings_w = $raw->ra_report_wip_value_byItem_settings;
//                                foreach ($reports_w as $key => $report_data_w) {
//                                    $key_name_setting = $key . '_settings';
//                                    $svgimage = new getsvgimage();
//                                    $svgimage->setProperty('_settings', $chart_settings_w);
//                                    if (property_exists($raw, $key_name_setting)) {
//                                        $this_chart_settings = $raw->$key_name_setting;
//                                        $svgimage->setProperty('_settings', $this_chart_settings);
//                                    }
//
//                                    $svgimage->setProperty('_data', $report_data_w);
//                                    $chart = $svgimage->draw_chart();
//                                    array_push($chart_a_w, $chart);
//                                }
//
//                                if (is_array($chart_a_w)) {
//                                    echo "<ul id='charts_in_report'>";
//                                    foreach ($chart_a_w as $key => $chart_image) {
//                                        echo "<li class=\"chart_no_$key\">$chart_image</li>";
//                                    }
//                                    echo '</ul>';
//                                } else {
//                                    echo $chart_a_w;
//                                }
                                ?>
                            </div>
                        </div>
                        <div id="tabsHeader-7" class="tabContent"></div>
                        <div id="tabsHeader-8" class="tabContent"></div>
                    </div>

                </div>
            </form>
        </div>
    </div>    

</div>
