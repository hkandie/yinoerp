<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_leave_balance}}".
 *
 * @property string $hr_leave_balance_id
 * @property integer $employee_id
 * @property string $leave_type
 * @property string $leave_per_year
 * @property string $total_available
 * @property string $total_used
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrLeaveBalance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_leave_balance}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'leave_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['leave_per_year', 'total_available', 'total_used'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['leave_type'], 'string', 'max' => 50],
            [['leave_type', 'total_used'], 'unique', 'targetAttribute' => ['leave_type', 'total_used'], 'message' => 'The combination of Leave Type and Total Used has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_leave_balance_id' => Yii::t('app', 'Hr Leave Balance ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'leave_type' => Yii::t('app', 'Leave Type'),
            'leave_per_year' => Yii::t('app', 'Leave Per Year'),
            'total_available' => Yii::t('app', 'Total Available'),
            'total_used' => Yii::t('app', 'Total Used'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
