<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_receipt_header}}".
 *
 * @property integer $ar_receipt_header_id
 * @property integer $bu_org_id
 * @property integer $ar_receipt_source_id
 * @property string $receipt_type
 * @property string $receipt_number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $from_bank_header_id
 * @property string $description
 * @property integer $from_bank_line_id
 * @property integer $to_bank_header_id
 * @property string $header_amount
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
 * @property string $pay_group
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
class ArReceiptHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_receipt_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'ar_receipt_source_id', 'currency', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'ar_receipt_source_id', 'ar_customer_id', 'ar_customer_site_id', 'from_bank_header_id', 'from_bank_line_id', 'to_bank_header_id', 'to_bank_line_id', 'ef_id', 'ledger_id', 'period_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['header_amount', 'exchange_rate'], 'number'],
            [['document_date', 'creation_date', 'last_update_date'], 'safe'],
            [['receipt_type', 'receipt_number', 'doc_currency', 'pay_group', 'receipt_method', 'approval_status', 'receipt_status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['description', 'currency'], 'string', 'max' => 256],
            [['exchange_rate_type', 'document_number'], 'string', 'max' => 50],
            [['receipt_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_receipt_header_id' => Yii::t('app', 'Ar Receipt Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'ar_receipt_source_id' => Yii::t('app', 'Ar Receipt Source ID'),
            'receipt_type' => Yii::t('app', 'Receipt Type'),
            'receipt_number' => Yii::t('app', 'Receipt Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'from_bank_header_id' => Yii::t('app', 'From Bank Header ID'),
            'description' => Yii::t('app', 'Description'),
            'from_bank_line_id' => Yii::t('app', 'From Bank Line ID'),
            'to_bank_header_id' => Yii::t('app', 'To Bank Header ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
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
            'pay_group' => Yii::t('app', 'Pay Group'),
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
