<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_wo_header".
 *
 * @property integer $am_wo_header_id
 * @property integer $am_asset_id
 * @property integer $activity_item_id_m
 * @property string $wo_number
 * @property integer $parent_wo_id
 * @property integer $org_id
 * @property integer $wip_accounting_group_id
 * @property string $wo_type
 * @property string $wo_status
 * @property integer $cycle
 * @property integer $cycle_interval
 * @property string $start_date
 * @property string $completion_date
 * @property string $quantity
 * @property integer $reference_bom_item_id_m
 * @property integer $bom_exploded_cb
 * @property integer $routing_exploded_cb
 * @property integer $reference_routing_item_id_m
 * @property integer $department_id
 * @property string $shutdown_type
 * @property string $failure_type
 * @property string $failure_cause
 * @property string $released_date
 * @property string $failure_resolution
 * @property string $suggested_start_date
 * @property string $schedule_group
 * @property integer $build_sequence
 * @property string $line
 * @property integer $scheduling_priority
 * @property string $closed_date
 * @property string $suggested_end_date
 * @property integer $am_maintenance_schedule_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmWoHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_wo_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['am_asset_id', 'activity_item_id_m', 'org_id', 'wip_accounting_group_id', 'start_date', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['am_asset_id', 'activity_item_id_m', 'parent_wo_id', 'org_id', 'wip_accounting_group_id', 'cycle', 'cycle_interval', 'reference_bom_item_id_m', 'bom_exploded_cb', 'routing_exploded_cb', 'reference_routing_item_id_m', 'department_id', 'build_sequence', 'scheduling_priority', 'am_maintenance_schedule_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'completion_date', 'released_date', 'suggested_start_date', 'closed_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity', 'suggested_end_date'], 'number'],
            [['wo_number', 'wo_status'], 'string', 'max' => 50],
            [['wo_type', 'shutdown_type', 'failure_type', 'failure_cause', 'failure_resolution'], 'string', 'max' => 25],
            [['schedule_group', 'line'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_wo_header_id' => Yii::t('app', 'Am Wo Header ID'),
            'am_asset_id' => Yii::t('app', 'Am Asset ID'),
            'activity_item_id_m' => Yii::t('app', 'Activity Item Id M'),
            'wo_number' => Yii::t('app', 'Wo Number'),
            'parent_wo_id' => Yii::t('app', 'Parent Wo ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'wo_type' => Yii::t('app', 'Wo Type'),
            'wo_status' => Yii::t('app', 'Wo Status'),
            'cycle' => Yii::t('app', 'Cycle'),
            'cycle_interval' => Yii::t('app', 'Cycle Interval'),
            'start_date' => Yii::t('app', 'Start Date'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'reference_bom_item_id_m' => Yii::t('app', 'Reference Bom Item Id M'),
            'bom_exploded_cb' => Yii::t('app', 'Bom Exploded Cb'),
            'routing_exploded_cb' => Yii::t('app', 'Routing Exploded Cb'),
            'reference_routing_item_id_m' => Yii::t('app', 'Reference Routing Item Id M'),
            'department_id' => Yii::t('app', 'Department ID'),
            'shutdown_type' => Yii::t('app', 'Shutdown Type'),
            'failure_type' => Yii::t('app', 'Failure Type'),
            'failure_cause' => Yii::t('app', 'Failure Cause'),
            'released_date' => Yii::t('app', 'Released Date'),
            'failure_resolution' => Yii::t('app', 'Failure Resolution'),
            'suggested_start_date' => Yii::t('app', 'Suggested Start Date'),
            'schedule_group' => Yii::t('app', 'Schedule Group'),
            'build_sequence' => Yii::t('app', 'Build Sequence'),
            'line' => Yii::t('app', 'Line'),
            'scheduling_priority' => Yii::t('app', 'Scheduling Priority'),
            'closed_date' => Yii::t('app', 'Closed Date'),
            'suggested_end_date' => Yii::t('app', 'Suggested End Date'),
            'am_maintenance_schedule_id' => Yii::t('app', 'Am Maintenance Schedule ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
