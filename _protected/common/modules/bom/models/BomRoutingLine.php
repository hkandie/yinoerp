<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_routing_line}}".
 *
 * @property integer $bom_routing_line_id
 * @property integer $bom_routing_header_id
 * @property integer $routing_sequence
 * @property integer $standard_operation_id
 * @property integer $department_id
 * @property string $description
 * @property integer $lead_time_percentage
 * @property integer $count_point_cb
 * @property integer $auto_charge_cb
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $eco_number
 * @property integer $eco_implemented_cb
 * @property integer $backflush_cb
 * @property string $yield
 * @property integer $include_in_rollup_cb
 * @property integer $minimum_transfer_quantity
 * @property integer $referenced_cb
 * @property integer $cumm_yield
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomRoutingLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_routing_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_routing_header_id', 'routing_sequence', 'department_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bom_routing_header_id', 'routing_sequence', 'standard_operation_id', 'department_id', 'lead_time_percentage', 'count_point_cb', 'auto_charge_cb', 'eco_implemented_cb', 'backflush_cb', 'include_in_rollup_cb', 'minimum_transfer_quantity', 'referenced_cb', 'cumm_yield', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['yield'], 'number'],
            [['description'], 'string', 'max' => 256],
            [['eco_number'], 'string', 'max' => 50],
            [['bom_routing_header_id', 'routing_sequence'], 'unique', 'targetAttribute' => ['bom_routing_header_id', 'routing_sequence'], 'message' => 'The combination of Bom Routing Header ID and Routing Sequence has already been taken.'],
            [['bom_routing_header_id', 'department_id', 'description'], 'unique', 'targetAttribute' => ['bom_routing_header_id', 'department_id', 'description'], 'message' => 'The combination of Bom Routing Header ID, Department ID and Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_routing_line_id' => Yii::t('app', 'Bom Routing Line ID'),
            'bom_routing_header_id' => Yii::t('app', 'Bom Routing Header ID'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'standard_operation_id' => Yii::t('app', 'Standard Operation ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'description' => Yii::t('app', 'Description'),
            'lead_time_percentage' => Yii::t('app', 'Lead Time Percentage'),
            'count_point_cb' => Yii::t('app', 'Count Point Cb'),
            'auto_charge_cb' => Yii::t('app', 'Auto Charge Cb'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'eco_number' => Yii::t('app', 'Eco Number'),
            'eco_implemented_cb' => Yii::t('app', 'Eco Implemented Cb'),
            'backflush_cb' => Yii::t('app', 'Backflush Cb'),
            'yield' => Yii::t('app', 'Yield'),
            'include_in_rollup_cb' => Yii::t('app', 'Include In Rollup Cb'),
            'minimum_transfer_quantity' => Yii::t('app', 'Minimum Transfer Quantity'),
            'referenced_cb' => Yii::t('app', 'Referenced Cb'),
            'cumm_yield' => Yii::t('app', 'Cumm Yield'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
