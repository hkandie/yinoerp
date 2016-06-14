<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_routing_line_v}}".
 *
 * @property integer $bom_routing_header_id_h
 * @property integer $item_id_m
 * @property string $alternate_routing
 * @property integer $org_id
 * @property string $routing_revision
 * @property string $effective_date
 * @property integer $common_routing_item_id_m
 * @property integer $description_h
 * @property integer $completion_subinventory
 * @property integer $completion_locator
 * @property integer $bom_routing_line_id
 * @property integer $bom_routing_header_id
 * @property integer $routing_sequence
 * @property integer $standard_operation_id
 * @property integer $department_id
 * @property string $description
 * @property integer $count_point_cb
 * @property integer $auto_charge_cb
 * @property integer $backflush_cb
 * @property integer $minimum_transfer_quantity
 * @property integer $lead_time_percentage
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $eco_number
 * @property integer $eco_implemented_cb
 * @property integer $include_in_rollup_cb
 * @property integer $referenced_cb
 * @property string $yield
 * @property integer $cumm_yield
 */
class BomRoutingLineV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_routing_line_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_routing_header_id_h', 'item_id_m', 'org_id', 'common_routing_item_id_m', 'description_h', 'completion_subinventory', 'completion_locator', 'bom_routing_line_id', 'bom_routing_header_id', 'routing_sequence', 'standard_operation_id', 'department_id', 'count_point_cb', 'auto_charge_cb', 'backflush_cb', 'minimum_transfer_quantity', 'lead_time_percentage', 'eco_implemented_cb', 'include_in_rollup_cb', 'referenced_cb', 'cumm_yield'], 'integer'],
            [['effective_date', 'effective_start_date', 'effective_end_date'], 'safe'],
            [['yield'], 'number'],
            [['alternate_routing', 'eco_number'], 'string', 'max' => 50],
            [['routing_revision'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_routing_header_id_h' => Yii::t('app', 'Bom Routing Header Id H'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'alternate_routing' => Yii::t('app', 'Alternate Routing'),
            'org_id' => Yii::t('app', 'Org ID'),
            'routing_revision' => Yii::t('app', 'Routing Revision'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'common_routing_item_id_m' => Yii::t('app', 'Common Routing Item Id M'),
            'description_h' => Yii::t('app', 'Description H'),
            'completion_subinventory' => Yii::t('app', 'Completion Subinventory'),
            'completion_locator' => Yii::t('app', 'Completion Locator'),
            'bom_routing_line_id' => Yii::t('app', 'Bom Routing Line ID'),
            'bom_routing_header_id' => Yii::t('app', 'Bom Routing Header ID'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'standard_operation_id' => Yii::t('app', 'Standard Operation ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'description' => Yii::t('app', 'Description'),
            'count_point_cb' => Yii::t('app', 'Count Point Cb'),
            'auto_charge_cb' => Yii::t('app', 'Auto Charge Cb'),
            'backflush_cb' => Yii::t('app', 'Backflush Cb'),
            'minimum_transfer_quantity' => Yii::t('app', 'Minimum Transfer Quantity'),
            'lead_time_percentage' => Yii::t('app', 'Lead Time Percentage'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'eco_number' => Yii::t('app', 'Eco Number'),
            'eco_implemented_cb' => Yii::t('app', 'Eco Implemented Cb'),
            'include_in_rollup_cb' => Yii::t('app', 'Include In Rollup Cb'),
            'referenced_cb' => Yii::t('app', 'Referenced Cb'),
            'yield' => Yii::t('app', 'Yield'),
            'cumm_yield' => Yii::t('app', 'Cumm Yield'),
        ];
    }
}
