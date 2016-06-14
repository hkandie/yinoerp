<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_contract_header}}".
 *
 * @property integer $hd_service_contract_header_id
 * @property integer $bu_org_id
 * @property string $category
 * @property string $contract_number
 * @property string $version
 * @property string $start_date
 * @property string $end_date
 * @property integer $duration_uom_id
 * @property string $duration
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
 * @property integer $payment_term_id
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $negotiation_status
 * @property string $status
 * @property string $document_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $period_id
 * @property string $payment_term_date
 * @property integer $ar_transaction_type_id
 * @property integer $billing_cb
 * @property string $invoicing_rule
 * @property string $accounting_rule
 * @property string $renewal_process
 * @property string $renew_upto_date
 * @property string $rewnew_pricing_method
 * @property integer $rewnew_price_list_id
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $approval_status
 * @property integer $sales_person_employee_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceContractHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_contract_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'category', 'start_date', 'end_date', 'ar_customer_id', 'ar_customer_site_id', 'currency', 'payment_term_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'duration_uom_id', 'ar_customer_id', 'ar_customer_site_id', 'ship_to_id', 'bill_to_id', 'payment_term_id', 'ledger_id', 'period_id', 'ar_transaction_type_id', 'billing_cb', 'rewnew_price_list_id', 'sales_person_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'document_date', 'payment_term_date', 'renew_upto_date', 'creation_date', 'last_update_date'], 'safe'],
            [['duration', 'header_amount', 'tax_amount', 'receipt_amount', 'exchange_rate'], 'number'],
            [['category', 'doc_currency', 'negotiation_status', 'status', 'invoicing_rule', 'accounting_rule', 'renewal_process', 'rewnew_pricing_method', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['contract_number'], 'string', 'max' => 15],
            [['version'], 'string', 'max' => 5],
            [['document_owner', 'description', 'currency'], 'string', 'max' => 256],
            [['exchange_rate_type', 'document_number'], 'string', 'max' => 50],
            [['approval_status'], 'string', 'max' => 20],
            [['version'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_contract_header_id' => Yii::t('app', 'Hd Service Contract Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'category' => Yii::t('app', 'Category'),
            'contract_number' => Yii::t('app', 'Contract Number'),
            'version' => Yii::t('app', 'Version'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'duration_uom_id' => Yii::t('app', 'Duration Uom ID'),
            'duration' => Yii::t('app', 'Duration'),
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
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'negotiation_status' => Yii::t('app', 'Negotiation Status'),
            'status' => Yii::t('app', 'Status'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'ar_transaction_type_id' => Yii::t('app', 'Ar Transaction Type ID'),
            'billing_cb' => Yii::t('app', 'Billing Cb'),
            'invoicing_rule' => Yii::t('app', 'Invoicing Rule'),
            'accounting_rule' => Yii::t('app', 'Accounting Rule'),
            'renewal_process' => Yii::t('app', 'Renewal Process'),
            'renew_upto_date' => Yii::t('app', 'Renew Upto Date'),
            'rewnew_pricing_method' => Yii::t('app', 'Rewnew Pricing Method'),
            'rewnew_price_list_id' => Yii::t('app', 'Rewnew Price List ID'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'sales_person_employee_id' => Yii::t('app', 'Sales Person Employee ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
