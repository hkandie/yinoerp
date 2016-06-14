<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_ms_meter_rule".
 *
 * @property string $am_ms_meter_rule_id
 * @property integer $am_maintenance_schedule_id
 * @property integer $am_meter_id
 * @property string $from_date
 * @property string $to_date
 * @property string $base_interval
 * @property string $cycle_interval
 * @property string $last_reading
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmMsMeterRule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_ms_meter_rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['am_maintenance_schedule_id', 'created_by', 'last_update_by'], 'required'],
            [['am_maintenance_schedule_id', 'am_meter_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['base_interval', 'cycle_interval', 'last_reading'], 'number'],
            [['am_maintenance_schedule_id', 'am_meter_id'], 'unique', 'targetAttribute' => ['am_maintenance_schedule_id', 'am_meter_id'], 'message' => 'The combination of Am Maintenance Schedule ID and Am Meter ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_ms_meter_rule_id' => Yii::t('app', 'Am Ms Meter Rule ID'),
            'am_maintenance_schedule_id' => Yii::t('app', 'Am Maintenance Schedule ID'),
            'am_meter_id' => Yii::t('app', 'Am Meter ID'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'base_interval' => Yii::t('app', 'Base Interval'),
            'cycle_interval' => Yii::t('app', 'Cycle Interval'),
            'last_reading' => Yii::t('app', 'Last Reading'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
