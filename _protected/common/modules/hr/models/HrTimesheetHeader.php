<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_timesheet_header}}".
 *
 * @property string $hr_timesheet_header_id
 * @property integer $hr_timesheet_period_id
 * @property integer $approver_employee_id
 * @property string $entered_on
 * @property string $approved_on
 * @property integer $hr_employee_id
 * @property string $approved_date
 * @property integer $approved_by_employee_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrTimesheetHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_timesheet_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_timesheet_period_id', 'hr_employee_id', 'status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_timesheet_period_id', 'approver_employee_id', 'hr_employee_id', 'approved_by_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['entered_on', 'approved_on', 'approved_date', 'creation_date', 'last_update_date'], 'safe'],
            [['status'], 'string', 'max' => 25],
            [['hr_timesheet_period_id', 'hr_employee_id'], 'unique', 'targetAttribute' => ['hr_timesheet_period_id', 'hr_employee_id'], 'message' => 'The combination of Hr Timesheet Period ID and Hr Employee ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_timesheet_header_id' => Yii::t('app', 'Hr Timesheet Header ID'),
            'hr_timesheet_period_id' => Yii::t('app', 'Hr Timesheet Period ID'),
            'approver_employee_id' => Yii::t('app', 'Approver Employee ID'),
            'entered_on' => Yii::t('app', 'Entered On'),
            'approved_on' => Yii::t('app', 'Approved On'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'approved_date' => Yii::t('app', 'Approved Date'),
            'approved_by_employee_id' => Yii::t('app', 'Approved By Employee ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
