<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_delivery_all_v}}".
 *
 * @property integer $sd_delivery_header_id
 * @property string $delivery_number
 * @property string $carrier
 * @property string $vehicle_number
 * @property string $handling_instruction
 * @property string $delivery_shipped_quantity
 * @property string $delivery_status
 * @property integer $sd_so_header_id
 * @property integer $bu_org_id
 * @property integer $document_type
 * @property string $so_number
 * @property integer $ar_customer_id
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property integer $ar_customer_site_id
 * @property integer $hr_employee_id
 * @property string $doc_currency
 * @property string $header_amount
 * @property string $so_status
 * @property integer $payment_term_id
 * @property string $customer_name
 * @property string $customer_number
 * @property string $customer_site_name
 * @property integer $customer_site_number
 * @property integer $sd_so_line_id
 * @property string $line_type
 * @property integer $line_number
 * @property integer $item_id_m
 * @property integer $kit_cb
 * @property integer $kit_configured_cb
 * @property integer $bom_config_header_id
 * @property integer $wip_wo_header_id
 * @property string $item_description
 * @property string $line_description
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
 * @property integer $uom_id
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
 * @property string $sales_person
 */
class SdDeliveryAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_delivery_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_delivery_header_id', 'sd_so_header_id', 'bu_org_id', 'document_type', 'ar_customer_id', 'ship_to_id', 'bill_to_id', 'ar_customer_site_id', 'hr_employee_id', 'payment_term_id', 'customer_site_number', 'sd_so_line_id', 'line_number', 'item_id_m', 'kit_cb', 'kit_configured_cb', 'bom_config_header_id', 'wip_wo_header_id', 'uom_id', 'shipping_org_id', 'created_by', 'last_update_by'], 'integer'],
            [['delivery_shipped_quantity', 'header_amount', 'line_quantity', 'picked_quantity', 'shipped_quantity', 'unit_price', 'line_price'], 'number'],
            [['delivery_status', 'bu_org_id', 'document_type', 'ar_customer_id', 'ship_to_id', 'bill_to_id', 'customer_name', 'customer_number', 'line_number', 'item_description', 'line_status', 'item_number', 'uom_id', 'item_status', 'org', 'shipping_org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['requested_date', 'promise_date', 'schedule_ship_date', 'actual_ship_date', 'creation_date', 'last_update_date'], 'safe'],
            [['address', 'address_b'], 'string'],
            [['delivery_number', 'delivery_status', 'doc_currency', 'so_status', 'customer_number', 'line_type', 'line_status'], 'string', 'max' => 25],
            [['carrier', 'vehicle_number', 'handling_instruction', 'item_description', 'line_description'], 'string', 'max' => 256],
            [['so_number', 'item_number', 'org', 'phone', 'phone_b'], 'string', 'max' => 50],
            [['customer_name', 'customer_site_name'], 'string', 'max' => 60],
            [['item_status'], 'string', 'max' => 15],
            [['country', 'country_b'], 'string', 'max' => 40],
            [['postal_code', 'postal_code_b'], 'string', 'max' => 20],
            [['email', 'email_b'], 'string', 'max' => 100],
            [['website', 'website_b'], 'string', 'max' => 200],
            [['sales_person'], 'string', 'max' => 102],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_delivery_header_id' => Yii::t('app', 'Sd Delivery Header ID'),
            'delivery_number' => Yii::t('app', 'Delivery Number'),
            'carrier' => Yii::t('app', 'Carrier'),
            'vehicle_number' => Yii::t('app', 'Vehicle Number'),
            'handling_instruction' => Yii::t('app', 'Handling Instruction'),
            'delivery_shipped_quantity' => Yii::t('app', 'Delivery Shipped Quantity'),
            'delivery_status' => Yii::t('app', 'Delivery Status'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'so_number' => Yii::t('app', 'So Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'so_status' => Yii::t('app', 'So Status'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'customer_number' => Yii::t('app', 'Customer Number'),
            'customer_site_name' => Yii::t('app', 'Customer Site Name'),
            'customer_site_number' => Yii::t('app', 'Customer Site Number'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'kit_cb' => Yii::t('app', 'Kit Cb'),
            'kit_configured_cb' => Yii::t('app', 'Kit Configured Cb'),
            'bom_config_header_id' => Yii::t('app', 'Bom Config Header ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_description' => Yii::t('app', 'Line Description'),
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
            'uom_id' => Yii::t('app', 'Uom ID'),
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
            'sales_person' => Yii::t('app', 'Sales Person'),
        ];
    }
}
