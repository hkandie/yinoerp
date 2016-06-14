<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_payslip_header}}".
 *
 * @property string $hr_payslip_header_id
 * @property integer $hr_payroll_process_id
 * @property integer $period_name_id
 * @property string $pay_date
 * @property string $description
 * @property string $status
 * @property integer $job_id
 * @property integer $position_id
 * @property integer $employee_id
 * @property integer $grade_id
 * @property string $no_of_days
 * @property integer $bank_account_id
 * @property string $payment_ref_no
 * @property string $social_ac_no
 * @property string $social_ac_no2
 * @property string $mode_of_payment
 * @property string $tax_reg_number
 * @property string $pay_duration_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPayslipHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_payslip_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_payroll_process_id', 'period_name_id', 'job_id', 'position_id', 'employee_id', 'grade_id', 'bank_account_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['pay_date', 'no_of_days', 'mode_of_payment', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['pay_date', 'creation_date', 'last_update_date'], 'safe'],
            [['no_of_days'], 'number'],
            [['description'], 'string', 'max' => 256],
            [['status', 'mode_of_payment', 'tax_reg_number', 'pay_duration_type'], 'string', 'max' => 25],
            [['payment_ref_no', 'social_ac_no', 'social_ac_no2'], 'string', 'max' => 50],
            [['pay_date', 'employee_id'], 'unique', 'targetAttribute' => ['pay_date', 'employee_id'], 'message' => 'The combination of Pay Date and Employee ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_payslip_header_id' => Yii::t('app', 'Hr Payslip Header ID'),
            'hr_payroll_process_id' => Yii::t('app', 'Hr Payroll Process ID'),
            'period_name_id' => Yii::t('app', 'Period Name ID'),
            'pay_date' => Yii::t('app', 'Pay Date'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'job_id' => Yii::t('app', 'Job ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'grade_id' => Yii::t('app', 'Grade ID'),
            'no_of_days' => Yii::t('app', 'No Of Days'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'payment_ref_no' => Yii::t('app', 'Payment Ref No'),
            'social_ac_no' => Yii::t('app', 'Social Ac No'),
            'social_ac_no2' => Yii::t('app', 'Social Ac No2'),
            'mode_of_payment' => Yii::t('app', 'Mode Of Payment'),
            'tax_reg_number' => Yii::t('app', 'Tax Reg Number'),
            'pay_duration_type' => Yii::t('app', 'Pay Duration Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
