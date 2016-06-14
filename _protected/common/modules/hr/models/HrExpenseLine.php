<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_expense_line}}".
 *
 * @property string $hr_expense_line_id
 * @property integer $hr_expense_header_id
 * @property string $claim_date
 * @property string $receipt_amount
 * @property string $receipt_currency
 * @property string $expense_type
 * @property string $status
 * @property string $purpose
 * @property string $start_date
 * @property string $daily_rate
 * @property integer $no_of_days
 * @property string $expense_location
 * @property string $vendor_name
 * @property string $vendor_details
 * @property integer $original_receipt_missing_cb
 * @property string $exchange_rate
 * @property string $line_number
 * @property string $per_diem_rate
 * @property string $per_diem_days
 * @property integer $mileage_uom_id
 * @property string $mileage_distace
 * @property string $mileage_rate
 * @property integer $cc_transaction_id
 * @property string $cc_transaction_date
 * @property integer $cc_age
 * @property string $cc_transaction_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrExpenseLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_expense_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_expense_header_id', 'status', 'line_number', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_expense_header_id', 'no_of_days', 'original_receipt_missing_cb', 'mileage_uom_id', 'cc_transaction_id', 'cc_age', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['claim_date', 'start_date', 'cc_transaction_date', 'creation_date', 'last_update_date'], 'safe'],
            [['receipt_amount', 'daily_rate', 'exchange_rate', 'per_diem_rate', 'per_diem_days', 'mileage_distace', 'mileage_rate', 'cc_transaction_amount'], 'number'],
            [['receipt_currency', 'expense_type', 'status', 'line_number'], 'string', 'max' => 25],
            [['purpose', 'vendor_details'], 'string', 'max' => 255],
            [['expense_location'], 'string', 'max' => 50],
            [['vendor_name'], 'string', 'max' => 100],
            [['hr_expense_header_id', 'line_number'], 'unique', 'targetAttribute' => ['hr_expense_header_id', 'line_number'], 'message' => 'The combination of Hr Expense Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_expense_line_id' => Yii::t('app', 'Hr Expense Line ID'),
            'hr_expense_header_id' => Yii::t('app', 'Hr Expense Header ID'),
            'claim_date' => Yii::t('app', 'Claim Date'),
            'receipt_amount' => Yii::t('app', 'Receipt Amount'),
            'receipt_currency' => Yii::t('app', 'Receipt Currency'),
            'expense_type' => Yii::t('app', 'Expense Type'),
            'status' => Yii::t('app', 'Status'),
            'purpose' => Yii::t('app', 'Purpose'),
            'start_date' => Yii::t('app', 'Start Date'),
            'daily_rate' => Yii::t('app', 'Daily Rate'),
            'no_of_days' => Yii::t('app', 'No Of Days'),
            'expense_location' => Yii::t('app', 'Expense Location'),
            'vendor_name' => Yii::t('app', 'Vendor Name'),
            'vendor_details' => Yii::t('app', 'Vendor Details'),
            'original_receipt_missing_cb' => Yii::t('app', 'Original Receipt Missing Cb'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'line_number' => Yii::t('app', 'Line Number'),
            'per_diem_rate' => Yii::t('app', 'Per Diem Rate'),
            'per_diem_days' => Yii::t('app', 'Per Diem Days'),
            'mileage_uom_id' => Yii::t('app', 'Mileage Uom ID'),
            'mileage_distace' => Yii::t('app', 'Mileage Distace'),
            'mileage_rate' => Yii::t('app', 'Mileage Rate'),
            'cc_transaction_id' => Yii::t('app', 'Cc Transaction ID'),
            'cc_transaction_date' => Yii::t('app', 'Cc Transaction Date'),
            'cc_age' => Yii::t('app', 'Cc Age'),
            'cc_transaction_amount' => Yii::t('app', 'Cc Transaction Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
