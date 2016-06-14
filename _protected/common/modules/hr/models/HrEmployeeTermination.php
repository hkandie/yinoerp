<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_employee_termination}}".
 *
 * @property string $hr_employee_termination_id
 * @property integer $employee_id
 * @property string $new_employer
 * @property string $reason
 * @property string $status
 * @property string $date_of_notification
 * @property string $projected_last_date
 * @property string $actual_last_date
 * @property string $accpeted_date
 * @property integer $accpeted_by_employee_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrEmployeeTermination extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_employee_termination}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'reason', 'created_by', 'last_update_by'], 'required'],
            [['employee_id', 'accpeted_by_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['date_of_notification', 'projected_last_date', 'actual_last_date', 'accpeted_date', 'creation_date', 'last_update_date'], 'safe'],
            [['new_employer', 'reason'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 25],
            [['employee_id', 'new_employer'], 'unique', 'targetAttribute' => ['employee_id', 'new_employer'], 'message' => 'The combination of Employee ID and New Employer has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_employee_termination_id' => Yii::t('app', 'Hr Employee Termination ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'new_employer' => Yii::t('app', 'New Employer'),
            'reason' => Yii::t('app', 'Reason'),
            'status' => Yii::t('app', 'Status'),
            'date_of_notification' => Yii::t('app', 'Date Of Notification'),
            'projected_last_date' => Yii::t('app', 'Projected Last Date'),
            'actual_last_date' => Yii::t('app', 'Actual Last Date'),
            'accpeted_date' => Yii::t('app', 'Accpeted Date'),
            'accpeted_by_employee_id' => Yii::t('app', 'Accpeted By Employee ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
