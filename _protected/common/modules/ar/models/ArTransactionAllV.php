<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_transaction_all_v}}".
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
 * @property string $receipt_amount
 * @property string $tax_amount
 * @property string $currency
 * @property string $doc_currency
 * @property integer $receivable_ac_id
 * @property integer $payment_term_id
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $transaction_status
 * @property string $document_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $trnx_period_id
 * @property string $payment_term_date
 * @property string $sales_person
 * @property string $receipt_method
 * @property string $approval_status
 * @property string $receipt_status
 * @property string $trnx_reference_type
 * @property string $trnx_reference_key_name
 * @property string $trnx_reference_key_value
 * @property integer $trnx_sd_so_header_id
 * @property integer $ar_transaction_line_id
 * @property integer $line_number
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $inv_line_quantity
 * @property string $inv_unit_price
 * @property integer $tax_code_id
 * @property string $so_tax_amount
 * @property string $gl_inv_line_price
 * @property string $gl_tax_amount
 * @property string $inv_line_price
 * @property string $trnx_line_type
 * @property string $line_description
 * @property integer $asset_cb
 * @property integer $uom_id
 * @property string $status
 * @property string $line_source
 * @property integer $sd_so_header_id
 * @property integer $trnx_sd_so_line_id
 * @property integer $sd_so_detail_id
 * @property integer $period_id
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $customer_name
 * @property string $customer_number
 * @property string $customer_site_name
 * @property integer $customer_site_number
 * @property integer $sd_so_line_id
 * @property string $line_type
 * @property integer $so_line_number
 * @property integer $kit_cb
 * @property integer $kit_configured_cb
 * @property integer $bom_config_header_id
 * @property integer $wip_wo_header_id
 * @property string $line_quantity
 * @property string $picked_quantity
 * @property string $shipped_quantity
 * @property string $unit_price
 * @property string $line_price
 * @property string $line_status
 * @property string $requested_date
 * @property string $promise_date
 * @property string $schedule_ship_date
 * @property string $actual_ship_date
 * @property string $item_number
 * @property integer $item_uom_id
 * @property string $item_status
 * @property string $org
 * @property integer $shipping_org_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $address
 * @property string $country
 * @property string $postal_code
 * @property string $phone
 * @property string $email
 * @property string $website
 * @property string $address_b
 * @property string $country_b
 * @property string $postal_code_b
 * @property string $phone_b
 * @property string $email_b
 * @property string $website_b
 * @property string $payment_term
 * @property string $payment_term_description
 */
class ArTransactionAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_transaction_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_transaction_header_id', 'bu_org_id', 'ar_customer_id', 'ar_customer_site_id', 'ship_to_id', 'bill_to_id', 'receivable_ac_id', 'payment_term_id', 'ledger_id', 'trnx_period_id', 'trnx_sd_so_header_id', 'ar_transaction_line_id', 'line_number', 'item_id_m', 'tax_code_id', 'asset_cb', 'uom_id', 'sd_so_header_id', 'trnx_sd_so_line_id', 'sd_so_detail_id', 'period_id', 'customer_site_number', 'sd_so_line_id', 'so_line_number', 'kit_cb', 'kit_configured_cb', 'bom_config_header_id', 'wip_wo_header_id', 'item_uom_id', 'shipping_org_id', 'created_by', 'last_update_by'], 'integer'],
            [['header_amount', 'receipt_amount', 'tax_amount', 'exchange_rate', 'inv_line_quantity', 'inv_unit_price', 'so_tax_amount', 'gl_inv_line_price', 'gl_tax_amount', 'inv_line_price', 'line_quantity', 'picked_quantity', 'shipped_quantity', 'unit_price', 'line_price'], 'number'],
            [['document_date', 'payment_term_date', 'requested_date', 'promise_date', 'schedule_ship_date', 'actual_ship_date', 'creation_date', 'last_update_date'], 'safe'],
            [['line_number', 'item_description', 'trnx_line_type', 'customer_name', 'customer_number'], 'required'],
            [['address', 'address_b'], 'string'],
            [['transaction_type', 'transaction_number', 'exchange_rate_type', 'document_number', 'sales_person', 'trnx_line_type', 'status', 'item_number', 'org', 'phone', 'phone_b', 'payment_term'], 'string', 'max' => 50],
            [['transaction_class', 'doc_currency', 'transaction_status', 'receipt_method', 'approval_status', 'receipt_status', 'trnx_reference_type', 'trnx_reference_key_name', 'trnx_reference_key_value', 'line_source', 'reference_type', 'reference_key_name', 'reference_key_value', 'customer_number', 'line_type', 'line_status'], 'string', 'max' => 25],
            [['document_owner', 'description', 'currency', 'item_description', 'line_description', 'payment_term_description'], 'string', 'max' => 256],
            [['customer_name', 'customer_site_name'], 'string', 'max' => 60],
            [['item_status'], 'string', 'max' => 15],
            [['country', 'country_b'], 'string', 'max' => 40],
            [['postal_code', 'postal_code_b'], 'string', 'max' => 20],
            [['email', 'email_b'], 'string', 'max' => 100],
            [['website', 'website_b'], 'string', 'max' => 200],
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
            'receipt_amount' => Yii::t('app', 'Receipt Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'receivable_ac_id' => Yii::t('app', 'Receivable Ac ID'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'transaction_status' => Yii::t('app', 'Transaction Status'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'trnx_period_id' => Yii::t('app', 'Trnx Period ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'sales_person' => Yii::t('app', 'Sales Person'),
            'receipt_method' => Yii::t('app', 'Receipt Method'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'receipt_status' => Yii::t('app', 'Receipt Status'),
            'trnx_reference_type' => Yii::t('app', 'Trnx Reference Type'),
            'trnx_reference_key_name' => Yii::t('app', 'Trnx Reference Key Name'),
            'trnx_reference_key_value' => Yii::t('app', 'Trnx Reference Key Value'),
            'trnx_sd_so_header_id' => Yii::t('app', 'Trnx Sd So Header ID'),
            'ar_transaction_line_id' => Yii::t('app', 'Ar Transaction Line ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'inv_line_quantity' => Yii::t('app', 'Inv Line Quantity'),
            'inv_unit_price' => Yii::t('app', 'Inv Unit Price'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'so_tax_amount' => Yii::t('app', 'So Tax Amount'),
            'gl_inv_line_price' => Yii::t('app', 'Gl Inv Line Price'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'inv_line_price' => Yii::t('app', 'Inv Line Price'),
            'trnx_line_type' => Yii::t('app', 'Trnx Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'asset_cb' => Yii::t('app', 'Asset Cb'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'status' => Yii::t('app', 'Status'),
            'line_source' => Yii::t('app', 'Line Source'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'trnx_sd_so_line_id' => Yii::t('app', 'Trnx Sd So Line ID'),
            'sd_so_detail_id' => Yii::t('app', 'Sd So Detail ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'customer_number' => Yii::t('app', 'Customer Number'),
            'customer_site_name' => Yii::t('app', 'Customer Site Name'),
            'customer_site_number' => Yii::t('app', 'Customer Site Number'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'so_line_number' => Yii::t('app', 'So Line Number'),
            'kit_cb' => Yii::t('app', 'Kit Cb'),
            'kit_configured_cb' => Yii::t('app', 'Kit Configured Cb'),
            'bom_config_header_id' => Yii::t('app', 'Bom Config Header ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'picked_quantity' => Yii::t('app', 'Picked Quantity'),
            'shipped_quantity' => Yii::t('app', 'Shipped Quantity'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'line_status' => Yii::t('app', 'Line Status'),
            'requested_date' => Yii::t('app', 'Requested Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'schedule_ship_date' => Yii::t('app', 'Schedule Ship Date'),
            'actual_ship_date' => Yii::t('app', 'Actual Ship Date'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_uom_id' => Yii::t('app', 'Item Uom ID'),
            'item_status' => Yii::t('app', 'Item Status'),
            'org' => Yii::t('app', 'Org'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'address' => Yii::t('app', 'Address'),
            'country' => Yii::t('app', 'Country'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'website' => Yii::t('app', 'Website'),
            'address_b' => Yii::t('app', 'Address B'),
            'country_b' => Yii::t('app', 'Country B'),
            'postal_code_b' => Yii::t('app', 'Postal Code B'),
            'phone_b' => Yii::t('app', 'Phone B'),
            'email_b' => Yii::t('app', 'Email B'),
            'website_b' => Yii::t('app', 'Website B'),
            'payment_term' => Yii::t('app', 'Payment Term'),
            'payment_term_description' => Yii::t('app', 'Payment Term Description'),
        ];
    }
}
