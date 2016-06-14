<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_transaction_header}}".
 *
 * @property integer $ar_transaction_header_id
 * @property integer $bu_org_id
 * @property string $transaction_type
 * @property string $transaction_class
 * @property string $transaction_number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property string $document_owner
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $header_amount
 * @property string $tax_amount
 * @property string $receipt_amount
 * @property string $currency
 * @property string $doc_currency
 * @property integer $receivable_ac_id
 * @property integer $payment_term_id
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $ef_id
 * @property string $transaction_status
 * @property string $document_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $period_id
 * @property string $payment_term_date
 * @property string $sales_person
 * @property string $receipt_method
 * @property string $approval_status
 * @property string $receipt_status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $sd_so_header_id
 * @property integer $gl_journal_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArTransactionHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_transaction_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'transaction_type', 'ar_customer_id', 'ar_customer_site_id', 'currency', 'receivable_ac_id', 'payment_term_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'ar_customer_id', 'ar_customer_site_id', 'ship_to_id', 'bill_to_id', 'receivable_ac_id', 'payment_term_id', 'ef_id', 'ledger_id', 'period_id', 'sd_so_header_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['header_amount', 'tax_amount', 'receipt_amount', 'exchange_rate'], 'number'],
            [['document_date', 'payment_term_date', 'creation_date', 'last_update_date'], 'safe'],
            [['transaction_type', 'transaction_number', 'exchange_rate_type', 'document_number', 'sales_person'], 'string', 'max' => 50],
            [['transaction_class', 'doc_currency', 'transaction_status', 'receipt_method', 'approval_status', 'receipt_status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['document_owner', 'description', 'currency'], 'string', 'max' => 256],
            [['transaction_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_transaction_header_id' => Yii::t('app', 'Ar Transaction Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'transaction_class' => Yii::t('app', 'Transaction Class'),
            'transaction_number' => Yii::t('app', 'Transaction Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'document_owner' => Yii::t('app', 'Document Owner'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'receipt_amount' => Yii::t('app', 'Receipt Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'receivable_ac_id' => Yii::t('app', 'Receivable Ac ID'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'transaction_status' => Yii::t('app', 'Transaction Status'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'sales_person' => Yii::t('app', 'Sales Person'),
            'receipt_method' => Yii::t('app', 'Receipt Method'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'receipt_status' => Yii::t('app', 'Receipt Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
