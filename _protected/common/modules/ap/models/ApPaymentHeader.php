<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_payment_header".
 *
 * @property integer $ap_payment_header_id
 * @property integer $bu_org_id
 * @property string $payment_type
 * @property string $payment_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
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
 * @property string $processing_method
 * @property string $document_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $period_id
 * @property string $pay_group
 * @property string $payment_method
 * @property string $approval_status
 * @property string $payment_status
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
class ApPaymentHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_payment_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'supplier_id', 'supplier_site_id', 'currency', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'supplier_id', 'supplier_site_id', 'from_bank_header_id', 'from_bank_line_id', 'to_bank_header_id', 'to_bank_line_id', 'ledger_id', 'period_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['header_amount', 'exchange_rate'], 'number'],
            [['document_date', 'creation_date', 'last_update_date'], 'safe'],
            [['payment_type', 'payment_number', 'doc_currency', 'processing_method', 'pay_group', 'payment_method', 'approval_status', 'payment_status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['description', 'currency'], 'string', 'max' => 256],
            [['exchange_rate_type', 'document_number'], 'string', 'max' => 50],
            [['payment_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_payment_header_id' => Yii::t('app', 'Ap Payment Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'payment_type' => Yii::t('app', 'Payment Type'),
            'payment_number' => Yii::t('app', 'Payment Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
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
            'processing_method' => Yii::t('app', 'Processing Method'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'pay_group' => Yii::t('app', 'Pay Group'),
            'payment_method' => Yii::t('app', 'Payment Method'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'payment_status' => Yii::t('app', 'Payment Status'),
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
