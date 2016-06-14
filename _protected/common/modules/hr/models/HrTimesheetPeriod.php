<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_timesheet_period}}".
 *
 * @property integer $hr_timesheet_period_id
 * @property string $timesheet_period
 * @property string $from_date
 * @property string $to_date
 * @property string $max_work_hour
 * @property string $max_billable_hour
 * @property string $status
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrTimesheetPeriod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_timesheet_period}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['max_work_hour', 'max_billable_hour'], 'number'],
            [['status', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['timesheet_period'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 200],
            [['max_work_hour'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_timesheet_period_id' => Yii::t('app', 'Hr Timesheet Period ID'),
            'timesheet_period' => Yii::t('app', 'Timesheet Period'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'max_work_hour' => Yii::t('app', 'Max Work Hour'),
            'max_billable_hour' => Yii::t('app', 'Max Billable Hour'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
