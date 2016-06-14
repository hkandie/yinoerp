<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_expense_all_v}}".
 *
 * @property string $hr_expense_header_id
 * @property integer $bu_org_id
 * @property integer $hr_employee_id
 * @property string $claim_date
 * @property string $status
 * @property string $purpose
 * @property string $doc_currency
 * @property integer $department_id
 * @property string $reason
 * @property string $currency
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $header_amount
 * @property string $hr_expense_line_id
 * @property string $line_number
 * @property string $line_claim_date
 * @property string $receipt_amount
 * @property string $receipt_currency
 * @property string $expense_type
 * @property string $line_status
 * @property string $line_purpose
 * @property string $start_date
 * @property string $line_exchange_rate
 * @property integer $supplier_id
 */
class HrExpenseAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_expense_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_expense_header_id', 'bu_org_id', 'hr_employee_id', 'department_id', 'hr_expense_line_id', 'supplier_id'], 'integer'],
            [['bu_org_id', 'hr_employee_id', 'status', 'department_id', 'line_number', 'line_status'], 'required'],
            [['claim_date', 'line_claim_date', 'start_date'], 'safe'],
            [['exchange_rate', 'header_amount', 'receipt_amount', 'line_exchange_rate'], 'number'],
            [['status', 'doc_currency', 'exchange_rate_type', 'line_number', 'receipt_currency', 'expense_type', 'line_status'], 'string', 'max' => 25],
            [['purpose', 'line_purpose'], 'string', 'max' => 255],
            [['reason'], 'string', 'max' => 256],
            [['currency'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_expense_header_id' => Yii::t('app', 'Hr Expense Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'claim_date' => Yii::t('app', 'Claim Date'),
            'status' => Yii::t('app', 'Status'),
            'purpose' => Yii::t('app', 'Purpose'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'department_id' => Yii::t('app', 'Department ID'),
            'reason' => Yii::t('app', 'Reason'),
            'currency' => Yii::t('app', 'Currency'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'hr_expense_line_id' => Yii::t('app', 'Hr Expense Line ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'line_claim_date' => Yii::t('app', 'Line Claim Date'),
            'receipt_amount' => Yii::t('app', 'Receipt Amount'),
            'receipt_currency' => Yii::t('app', 'Receipt Currency'),
            'expense_type' => Yii::t('app', 'Expense Type'),
            'line_status' => Yii::t('app', 'Line Status'),
            'line_purpose' => Yii::t('app', 'Line Purpose'),
            'start_date' => Yii::t('app', 'Start Date'),
            'line_exchange_rate' => Yii::t('app', 'Line Exchange Rate'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
        ];
    }
}
