<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_wo_routing_line}}".
 *
 * @property integer $wip_wo_routing_line_id
 * @property integer $wip_wo_header_id
 * @property integer $routing_sequence
 * @property integer $standard_operation_id
 * @property integer $department_id
 * @property string $description
 * @property string $start_date
 * @property integer $count_point_cb
 * @property integer $auto_charge_cb
 * @property string $completion_date
 * @property integer $queue_quantity
 * @property integer $running_quantity
 * @property integer $rejected_quantity
 * @property integer $backflush_cb
 * @property string $yield
 * @property integer $scrapped_quantity
 * @property integer $minimum_transfer_quantity
 * @property integer $tomove_quantity
 * @property integer $completed_quantity
 * @property integer $progress_percentage
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipWoRoutingLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_wo_routing_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wip_wo_header_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['wip_wo_header_id', 'routing_sequence', 'standard_operation_id', 'department_id', 'count_point_cb', 'auto_charge_cb', 'queue_quantity', 'running_quantity', 'rejected_quantity', 'backflush_cb', 'scrapped_quantity', 'minimum_transfer_quantity', 'tomove_quantity', 'completed_quantity', 'progress_percentage', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'completion_date', 'creation_date', 'last_update_date'], 'safe'],
            [['yield'], 'number'],
            [['description'], 'string', 'max' => 256],
            [['wip_wo_header_id', 'routing_sequence'], 'unique', 'targetAttribute' => ['wip_wo_header_id', 'routing_sequence'], 'message' => 'The combination of Wip Wo Header ID and Routing Sequence has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_wo_routing_line_id' => Yii::t('app', 'Wip Wo Routing Line ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'standard_operation_id' => Yii::t('app', 'Standard Operation ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'count_point_cb' => Yii::t('app', 'Count Point Cb'),
            'auto_charge_cb' => Yii::t('app', 'Auto Charge Cb'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'queue_quantity' => Yii::t('app', 'Queue Quantity'),
            'running_quantity' => Yii::t('app', 'Running Quantity'),
            'rejected_quantity' => Yii::t('app', 'Rejected Quantity'),
            'backflush_cb' => Yii::t('app', 'Backflush Cb'),
            'yield' => Yii::t('app', 'Yield'),
            'scrapped_quantity' => Yii::t('app', 'Scrapped Quantity'),
            'minimum_transfer_quantity' => Yii::t('app', 'Minimum Transfer Quantity'),
            'tomove_quantity' => Yii::t('app', 'Tomove Quantity'),
            'completed_quantity' => Yii::t('app', 'Completed Quantity'),
            'progress_percentage' => Yii::t('app', 'Progress Percentage'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
