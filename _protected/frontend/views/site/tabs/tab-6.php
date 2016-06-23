<?php

use common\modules\wip\models\WipWoHeader;
?>
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