<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_payroll_payment_method}}".
 *
 * @property string $hr_payroll_payment_method_id
 * @property string $payment_method
 * @property integer $ledger_id
 * @property string $payment_type
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property string $currency
 * @property integer $bank_account_id
 * @property integer $cash_ac_id
 * @property integer $clearing_ac_id
 * @property integer $bank_charge_ac_id
 * @property integer $salary_payable_ac_id
 * @property integer $costed_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPayrollPaymentMethod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_payroll_payment_method}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ledger_id', 'salary_payable_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['ledger_id', 'bank_account_id', 'cash_ac_id', 'clearing_ac_id', 'bank_charge_ac_id', 'salary_payable_ac_id', 'costed_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['payment_method'], 'string', 'max' => 100],
            [['payment_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['currency'], 'string', 'max' => 25],
            [['payment_method'], 'unique'],
            [['payment_type'], 'unique'],
            [['payment_method'], 'unique'],
            [['payment_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_payroll_payment_method_id' => Yii::t('app', 'Hr Payroll Payment Method ID'),
            'payment_method' => Yii::t('app', 'Payment Method'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'payment_type' => Yii::t('app', 'Payment Type'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'description' => Yii::t('app', 'Description'),
            'currency' => Yii::t('app', 'Currency'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'cash_ac_id' => Yii::t('app', 'Cash Ac ID'),
            'clearing_ac_id' => Yii::t('app', 'Clearing Ac ID'),
            'bank_charge_ac_id' => Yii::t('app', 'Bank Charge Ac ID'),
            'salary_payable_ac_id' => Yii::t('app', 'Salary Payable Ac ID'),
            'costed_cb' => Yii::t('app', 'Costed Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
