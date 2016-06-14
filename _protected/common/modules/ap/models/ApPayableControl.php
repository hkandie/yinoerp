<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_payable_control".
 *
 * @property string $ap_payable_control_id
 * @property integer $org_id
 * @property integer $payment_term_id
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $inv_approval_hierarchy
 * @property string $payment_approval_hierarchy
 * @property integer $tax_ac_id
 * @property integer $liability_ac_id
 * @property integer $pre_payment_ac_id
 * @property integer $discount_ac_id
 * @property integer $rate_gain_ac_id
 * @property integer $rate_loss_ac_id
 * @property integer $cash_ac_id
 * @property integer $default_exchange_rate_type
 * @property integer $expense_payment_term
 * @property string $expense_pay_group
 * @property integer $expense_payment_priority
 * @property integer $expense_template_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ApPayableControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_payable_control';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'payment_term_id', 'ship_to_id', 'bill_to_id', 'tax_ac_id', 'liability_ac_id', 'pre_payment_ac_id', 'discount_ac_id', 'rate_gain_ac_id', 'rate_loss_ac_id', 'cash_ac_id', 'default_exchange_rate_type', 'expense_payment_term', 'expense_payment_priority', 'expense_template_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['inv_approval_hierarchy', 'payment_approval_hierarchy', 'expense_pay_group'], 'string', 'max' => 25],
            [['org_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_payable_control_id' => Yii::t('app', 'Ap Payable Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'inv_approval_hierarchy' => Yii::t('app', 'Inv Approval Hierarchy'),
            'payment_approval_hierarchy' => Yii::t('app', 'Payment Approval Hierarchy'),
            'tax_ac_id' => Yii::t('app', 'Tax Ac ID'),
            'liability_ac_id' => Yii::t('app', 'Liability Ac ID'),
            'pre_payment_ac_id' => Yii::t('app', 'Pre Payment Ac ID'),
            'discount_ac_id' => Yii::t('app', 'Discount Ac ID'),
            'rate_gain_ac_id' => Yii::t('app', 'Rate Gain Ac ID'),
            'rate_loss_ac_id' => Yii::t('app', 'Rate Loss Ac ID'),
            'cash_ac_id' => Yii::t('app', 'Cash Ac ID'),
            'default_exchange_rate_type' => Yii::t('app', 'Default Exchange Rate Type'),
            'expense_payment_term' => Yii::t('app', 'Expense Payment Term'),
            'expense_pay_group' => Yii::t('app', 'Expense Pay Group'),
            'expense_payment_priority' => Yii::t('app', 'Expense Payment Priority'),
            'expense_template_id' => Yii::t('app', 'Expense Template ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
