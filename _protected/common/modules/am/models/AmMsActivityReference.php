<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_ms_activity_reference".
 *
 * @property string $am_ms_activity_reference_id
 * @property integer $am_maintenance_schedule_id
 * @property integer $activity_item_id_m
 * @property string $last_date
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property string $interval_multiple
 * @property integer $repeat_in_cycle_cb
 * @property integer $last_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmMsActivityReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_ms_activity_reference';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['am_maintenance_schedule_id', 'activity_item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['am_maintenance_schedule_id', 'activity_item_id_m', 'repeat_in_cycle_cb', 'last_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['last_date', 'start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['interval_multiple'], 'number'],
            [['description'], 'string', 'max' => 256],
            [['am_maintenance_schedule_id', 'activity_item_id_m'], 'unique', 'targetAttribute' => ['am_maintenance_schedule_id', 'activity_item_id_m'], 'message' => 'The combination of Am Maintenance Schedule ID and Activity Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_ms_activity_reference_id' => Yii::t('app', 'Am Ms Activity Reference ID'),
            'am_maintenance_schedule_id' => Yii::t('app', 'Am Maintenance Schedule ID'),
            'activity_item_id_m' => Yii::t('app', 'Activity Item Id M'),
            'last_date' => Yii::t('app', 'Last Date'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'description' => Yii::t('app', 'Description'),
            'interval_multiple' => Yii::t('app', 'Interval Multiple'),
            'repeat_in_cycle_cb' => Yii::t('app', 'Repeat In Cycle Cb'),
            'last_cb' => Yii::t('app', 'Last Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
