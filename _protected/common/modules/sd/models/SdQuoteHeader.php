<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_quote_header}}".
 *
 * @property integer $sd_quote_header_id
 * @property integer $bu_org_id
 * @property string $quote_number
 * @property integer $sd_lead_id
 * @property integer $sd_opportunity_id
 * @property string $new_customer_name
 * @property string $new_customer_address
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $hr_employee_id
 * @property string $status
 * @property string $approval_status
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property integer $price_list_header_id
 * @property string $header_amount
 * @property string $tax_amount
 * @property string $doc_currency
 * @property integer $payment_term_id
 * @property string $payment_term_date
 * @property string $agreement_start_date
 * @property string $aggrement_end_date
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $reference_type
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdQuoteHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_quote_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'sd_lead_id', 'sd_opportunity_id', 'ar_customer_id', 'ar_customer_site_id', 'hr_employee_id', 'ship_to_id', 'bill_to_id', 'price_list_header_id', 'payment_term_id', 'reference_key_value', 'rev_enabled_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['header_amount', 'tax_amount', 'exchange_rate'], 'number'],
            [['payment_term_date', 'agreement_start_date', 'aggrement_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['quote_number', 'exchange_rate_type'], 'string', 'max' => 50],
            [['new_customer_name'], 'string', 'max' => 100],
            [['new_customer_address', 'description'], 'string', 'max' => 256],
            [['status', 'approval_status', 'doc_currency', 'reference_type', 'reference_key_name'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_quote_header_id' => Yii::t('app', 'Sd Quote Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'quote_number' => Yii::t('app', 'Quote Number'),
            'sd_lead_id' => Yii::t('app', 'Sd Lead ID'),
            'sd_opportunity_id' => Yii::t('app', 'Sd Opportunity ID'),
            'new_customer_name' => Yii::t('app', 'New Customer Name'),
            'new_customer_address' => Yii::t('app', 'New Customer Address'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'status' => Yii::t('app', 'Status'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'agreement_start_date' => Yii::t('app', 'Agreement Start Date'),
            'aggrement_end_date' => Yii::t('app', 'Aggrement End Date'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
