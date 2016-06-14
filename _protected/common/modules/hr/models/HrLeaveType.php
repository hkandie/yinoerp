<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_leave_type}}".
 *
 * @property string $hr_leave_type_id
 * @property string $leave_type
 * @property string $leave_category
 * @property string $description
 * @property integer $allow_carry_forward_cb
 * @property string $carry_forward_per_year
 * @property string $maximum_accumulation
 * @property integer $auto_convert_salary_cb
 * @property integer $allow_advance_cb
 * @property integer $lwp_cb
 * @property string $default_reason
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrLeaveType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_leave_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['leave_type', 'leave_category', 'created_by', 'last_update_by'], 'required'],
            [['allow_carry_forward_cb', 'auto_convert_salary_cb', 'allow_advance_cb', 'lwp_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['carry_forward_per_year', 'maximum_accumulation'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['leave_type', 'leave_category'], 'string', 'max' => 50],
            [['description', 'default_reason'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 25],
            [['leave_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_leave_type_id' => Yii::t('app', 'Hr Leave Type ID'),
            'leave_type' => Yii::t('app', 'Leave Type'),
            'leave_category' => Yii::t('app', 'Leave Category'),
            'description' => Yii::t('app', 'Description'),
            'allow_carry_forward_cb' => Yii::t('app', 'Allow Carry Forward Cb'),
            'carry_forward_per_year' => Yii::t('app', 'Carry Forward Per Year'),
            'maximum_accumulation' => Yii::t('app', 'Maximum Accumulation'),
            'auto_convert_salary_cb' => Yii::t('app', 'Auto Convert Salary Cb'),
            'allow_advance_cb' => Yii::t('app', 'Allow Advance Cb'),
            'lwp_cb' => Yii::t('app', 'Lwp Cb'),
            'default_reason' => Yii::t('app', 'Default Reason'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
