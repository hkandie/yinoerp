<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_so_header}}".
 *
 * @property integer $sd_so_header_id
 * @property integer $bu_org_id
 * @property integer $document_type
 * @property string $so_number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $hr_employee_id
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property integer $price_list_header_id
 * @property string $header_amount
 * @property string $pre_payment_amount
 * @property string $tax_amount
 * @property string $doc_currency
 * @property string $prepaid_status
 * @property string $prepaid_amount
 * @property string $currency
 * @property integer $payment_term_id
 * @property string $payment_term_date
 * @property string $agreement_start_date
 * @property string $aggrement_end_date
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $released_amount
 * @property string $order_source_type
 * @property string $order_reference_table
 * @property integer $order_reference_id
 * @property string $so_status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $approval_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $company_id
 */
class SdSoHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_so_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'document_type', 'ar_customer_id', 'ship_to_id', 'bill_to_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'document_type', 'ar_customer_id', 'ar_customer_site_id', 'hr_employee_id', 'ship_to_id', 'bill_to_id', 'price_list_header_id', 'payment_term_id', 'order_reference_id', 'reference_key_value', 'created_by', 'last_update_by', 'rev_enabled_cb', 'rev_number', 'company_id'], 'integer'],
            [['header_amount', 'pre_payment_amount', 'tax_amount', 'prepaid_amount', 'exchange_rate', 'released_amount'], 'number'],
            [['payment_term_date', 'agreement_start_date', 'aggrement_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['so_number', 'exchange_rate_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['doc_currency', 'prepaid_status', 'order_source_type', 'so_status', 'reference_type', 'reference_key_name', 'approval_status'], 'string', 'max' => 25],
            [['currency'], 'string', 'max' => 20],
            [['order_reference_table'], 'string', 'max' => 100],
            [['order_reference_table', 'order_reference_id'], 'unique', 'targetAttribute' => ['order_reference_table', 'order_reference_id'], 'message' => 'The combination of Order Reference Table and Order Reference ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'so_number' => Yii::t('app', 'So Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'pre_payment_amount' => Yii::t('app', 'Pre Payment Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'prepaid_status' => Yii::t('app', 'Prepaid Status'),
            'prepaid_amount' => Yii::t('app', 'Prepaid Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'agreement_start_date' => Yii::t('app', 'Agreement Start Date'),
            'aggrement_end_date' => Yii::t('app', 'Aggrement End Date'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'released_amount' => Yii::t('app', 'Released Amount'),
            'order_source_type' => Yii::t('app', 'Order Source Type'),
            'order_reference_table' => Yii::t('app', 'Order Reference Table'),
            'order_reference_id' => Yii::t('app', 'Order Reference ID'),
            'so_status' => Yii::t('app', 'So Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
