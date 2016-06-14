<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_receipt_interface}}".
 *
 * @property integer $ar_receipt_interface_id
 * @property integer $ar_transaction_header_id
 * @property integer $bu_org_id
 * @property string $receipt_type
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $from_bank_header_id
 * @property string $description
 * @property integer $from_bank_line_id
 * @property integer $to_bank_header_id
 * @property string $amount
 * @property string $currency
 * @property string $doc_currency
 * @property integer $to_bank_line_id
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $ef_id
 * @property string $document_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $period_id
 * @property string $sales_person
 * @property string $receipt_method
 * @property string $approval_status
 * @property string $receipt_status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $gl_journal_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArReceiptInterface extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_receipt_interface}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_transaction_header_id', 'bu_org_id', 'ar_customer_id', 'ar_customer_site_id', 'currency', 'created_by', 'last_update_by'], 'required'],
            [['ar_transaction_header_id', 'bu_org_id', 'ar_customer_id', 'ar_customer_site_id', 'from_bank_header_id', 'from_bank_line_id', 'to_bank_header_id', 'to_bank_line_id', 'ef_id', 'ledger_id', 'period_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount', 'exchange_rate'], 'number'],
            [['document_date', 'creation_date', 'last_update_date'], 'safe'],
            [['receipt_type', 'doc_currency', 'receipt_method', 'approval_status', 'receipt_status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['description', 'currency'], 'string', 'max' => 256],
            [['exchange_rate_type', 'document_number', 'sales_person'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_receipt_interface_id' => Yii::t('app', 'Ar Receipt Interface ID'),
            'ar_transaction_header_id' => Yii::t('app', 'Ar Transaction Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'receipt_type' => Yii::t('app', 'Receipt Type'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'from_bank_header_id' => Yii::t('app', 'From Bank Header ID'),
            'description' => Yii::t('app', 'Description'),
            'from_bank_line_id' => Yii::t('app', 'From Bank Line ID'),
            'to_bank_header_id' => Yii::t('app', 'To Bank Header ID'),
            'amount' => Yii::t('app', 'Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'to_bank_line_id' => Yii::t('app', 'To Bank Line ID'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'sales_person' => Yii::t('app', 'Sales Person'),
            'receipt_method' => Yii::t('app', 'Receipt Method'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'receipt_status' => Yii::t('app', 'Receipt Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
