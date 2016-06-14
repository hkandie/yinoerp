<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_maintenance_schedule".
 *
 * @property string $am_maintenance_schedule_id
 * @property string $schedule_name
 * @property integer $schedule_number
 * @property integer $item_id_m
 * @property integer $am_asset_id
 * @property string $effective_end_date
 * @property string $effective_start_date
 * @property string $wo_status
 * @property string $description
 * @property string $intervals_per_cycle
 * @property integer $create_wo_cb
 * @property string $current_cycle
 * @property string $current_cycle_interval
 * @property string $schedule_basis
 * @property string $schedule_basis_date
 * @property string $schedule_method
 * @property integer $reschedule_wo_cb
 * @property integer $org_id
 * @property integer $address_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmMaintenanceSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_maintenance_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['schedule_name', 'created_by', 'last_update_by'], 'required'],
            [['schedule_number', 'item_id_m', 'am_asset_id', 'create_wo_cb', 'reschedule_wo_cb', 'org_id', 'address_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_end_date', 'effective_start_date', 'schedule_basis_date', 'creation_date', 'last_update_date'], 'safe'],
            [['intervals_per_cycle', 'current_cycle', 'current_cycle_interval'], 'number'],
            [['schedule_name', 'wo_status', 'schedule_basis', 'schedule_method'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 20],
            [['schedule_name', 'org_id'], 'unique', 'targetAttribute' => ['schedule_name', 'org_id'], 'message' => 'The combination of Schedule Name and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_maintenance_schedule_id' => Yii::t('app', 'Am Maintenance Schedule ID'),
            'schedule_name' => Yii::t('app', 'Schedule Name'),
            'schedule_number' => Yii::t('app', 'Schedule Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'am_asset_id' => Yii::t('app', 'Am Asset ID'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'wo_status' => Yii::t('app', 'Wo Status'),
            'description' => Yii::t('app', 'Description'),
            'intervals_per_cycle' => Yii::t('app', 'Intervals Per Cycle'),
            'create_wo_cb' => Yii::t('app', 'Create Wo Cb'),
            'current_cycle' => Yii::t('app', 'Current Cycle'),
            'current_cycle_interval' => Yii::t('app', 'Current Cycle Interval'),
            'schedule_basis' => Yii::t('app', 'Schedule Basis'),
            'schedule_basis_date' => Yii::t('app', 'Schedule Basis Date'),
            'schedule_method' => Yii::t('app', 'Schedule Method'),
            'reschedule_wo_cb' => Yii::t('app', 'Reschedule Wo Cb'),
            'org_id' => Yii::t('app', 'Org ID'),
            'address_id' => Yii::t('app', 'Address ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
