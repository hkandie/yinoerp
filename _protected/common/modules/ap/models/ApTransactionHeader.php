<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_transaction_header".
 *
 * @property integer $ap_transaction_header_id
 * @property integer $bu_org_id
 * @property string $transaction_type
 * @property string $transaction_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $hr_employee_id
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $header_amount
 * @property string $paid_amount
 * @property string $pay_group
 * @property string $payment_status
 * @property integer $payment_term_id
 * @property string $payment_term_date
 * @property string $payment_method
 * @property string $tax_amount
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $ef_id
 * @property string $doc_currency
 * @property string $currency
 * @property string $transaction_status
 * @property string $document_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $period_id
 * @property string $approval_status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $po_header_id
 * @property integer $gl_journal_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ApTransactionHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_transaction_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'transaction_type', 'supplier_id', 'supplier_site_id', 'payment_term_id', 'currency', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'supplier_id', 'supplier_site_id', 'ship_to_id', 'bill_to_id', 'payment_term_id', 'ef_id', 'ledger_id', 'period_id', 'po_header_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['header_amount', 'paid_amount', 'tax_amount', 'exchange_rate'], 'number'],
            [['payment_term_date', 'document_date', 'creation_date', 'last_update_date'], 'safe'],
            [['transaction_type', 'transaction_number', 'exchange_rate_type', 'document_number'], 'string', 'max' => 50],
            [['hr_employee_id'], 'string', 'max' => 12],
            [['description', 'currency'], 'string', 'max' => 256],
            [['pay_group', 'payment_status', 'payment_method', 'doc_currency', 'transaction_status', 'approval_status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['transaction_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_transaction_header_id' => Yii::t('app', 'Ap Transaction Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'transaction_number' => Yii::t('app', 'Transaction Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'paid_amount' => Yii::t('app', 'Paid Amount'),
            'pay_group' => Yii::t('app', 'Pay Group'),
            'payment_status' => Yii::t('app', 'Payment Status'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'payment_method' => Yii::t('app', 'Payment Method'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'currency' => Yii::t('app', 'Currency'),
            'transaction_status' => Yii::t('app', 'Transaction Status'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
