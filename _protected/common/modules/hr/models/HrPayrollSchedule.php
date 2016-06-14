<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_payroll_schedule}}".
 *
 * @property string $hr_payroll_schedule_id
 * @property integer $hr_payroll_id
 * @property string $scheduled_date
 * @property string $start_date
 * @property string $end_date
 * @property string $period_name
 * @property string $description
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPayrollSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_payroll_schedule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_payroll_id', 'scheduled_date', 'start_date', 'end_date', 'created_by', 'last_update_by'], 'required'],
            [['hr_payroll_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['scheduled_date', 'start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['period_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 25],
            [['hr_payroll_id', 'scheduled_date'], 'unique', 'targetAttribute' => ['hr_payroll_id', 'scheduled_date'], 'message' => 'The combination of Hr Payroll ID and Scheduled Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_payroll_schedule_id' => Yii::t('app', 'Hr Payroll Schedule ID'),
            'hr_payroll_id' => Yii::t('app', 'Hr Payroll ID'),
            'scheduled_date' => Yii::t('app', 'Scheduled Date'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'period_name' => Yii::t('app', 'Period Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
