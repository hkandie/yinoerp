<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_report}}".
 *
 * @property string $extn_report_id
 * @property string $report_name
 * @property string $module_code
 * @property string $description
 * @property string $custom_div_class
 * @property string $logical_settings
 * @property string $query_v
 * @property string $report_columns
 * @property string $display_type
 * @property integer $page
 * @property string $page_title
 * @property string $page_header
 * @property string $page_footer
 * @property integer $use_pager_cb
 * @property integer $default_per_page
 * @property integer $no_of_grid_columns
 * @property string $path
 * @property integer $path_id
 * @property integer $block_id
 * @property string $block_title
 * @property integer $show_graph_only_cb
 * @property integer $rev_enabled_cb
 * @property string $rev_number
 * @property string $header_text
 * @property string $footer_text
 * @property integer $remove_default_header_cb
 * @property string $list_type
 * @property string $chart_type
 * @property integer $chart_width
 * @property integer $chart_height
 * @property string $chart_label
 * @property string $chart_value
 * @property string $chart_legend
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnReport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_report}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['report_name', 'report_columns', 'created_by', 'last_update_by'], 'required'],
            [['logical_settings', 'query_v', 'report_columns', 'page_header', 'page_footer', 'header_text', 'footer_text'], 'string'],
            [['page', 'use_pager_cb', 'default_per_page', 'no_of_grid_columns', 'path_id', 'block_id', 'show_graph_only_cb', 'rev_enabled_cb', 'remove_default_header_cb', 'chart_width', 'chart_height', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['report_name', 'display_type'], 'string', 'max' => 100],
            [['module_code'], 'string', 'max' => 10],
            [['description', 'custom_div_class', 'page_title', 'path', 'block_title'], 'string', 'max' => 255],
            [['rev_number', 'chart_label', 'chart_value', 'chart_legend'], 'string', 'max' => 256],
            [['list_type', 'chart_type'], 'string', 'max' => 25],
            [['report_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_report_id' => Yii::t('app', 'Extn Report ID'),
            'report_name' => Yii::t('app', 'Report Name'),
            'module_code' => Yii::t('app', 'Module Code'),
            'description' => Yii::t('app', 'Description'),
            'custom_div_class' => Yii::t('app', 'Custom Div Class'),
            'logical_settings' => Yii::t('app', 'Logical Settings'),
            'query_v' => Yii::t('app', 'Query V'),
            'report_columns' => Yii::t('app', 'Report Columns'),
            'display_type' => Yii::t('app', 'Display Type'),
            'page' => Yii::t('app', 'Page'),
            'page_title' => Yii::t('app', 'Page Title'),
            'page_header' => Yii::t('app', 'Page Header'),
            'page_footer' => Yii::t('app', 'Page Footer'),
            'use_pager_cb' => Yii::t('app', 'Use Pager Cb'),
            'default_per_page' => Yii::t('app', 'Default Per Page'),
            'no_of_grid_columns' => Yii::t('app', 'No Of Grid Columns'),
            'path' => Yii::t('app', 'Path'),
            'path_id' => Yii::t('app', 'Path ID'),
            'block_id' => Yii::t('app', 'Block ID'),
            'block_title' => Yii::t('app', 'Block Title'),
            'show_graph_only_cb' => Yii::t('app', 'Show Graph Only Cb'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'header_text' => Yii::t('app', 'Header Text'),
            'footer_text' => Yii::t('app', 'Footer Text'),
            'remove_default_header_cb' => Yii::t('app', 'Remove Default Header Cb'),
            'list_type' => Yii::t('app', 'List Type'),
            'chart_type' => Yii::t('app', 'Chart Type'),
            'chart_width' => Yii::t('app', 'Chart Width'),
            'chart_height' => Yii::t('app', 'Chart Height'),
            'chart_label' => Yii::t('app', 'Chart Label'),
            'chart_value' => Yii::t('app', 'Chart Value'),
            'chart_legend' => Yii::t('app', 'Chart Legend'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
