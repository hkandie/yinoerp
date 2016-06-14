<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_svo_header}}".
 *
 * @property integer $hd_svo_header_id
 * @property integer $bu_org_id
 * @property integer $hd_service_type_header_id
 * @property string $order_number
 * @property integer $hd_service_request_id
 * @property string $promise_date
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $service_team_id
 * @property integer $service_person_employee_id
 * @property string $description
 * @property integer $price_list_header_id
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property integer $item_id_m
 * @property integer $inv_serial_number_id
 * @property integer $lot_number_id
 * @property string $quantity
 * @property string $estimate_amount
 * @property string $doc_currency
 * @property string $prepaid_status
 * @property string $prepaid_amount
 * @property string $currency
 * @property integer $payment_term_id
 * @property string $payment_term_date
 * @property string $warrenty_status
 * @property string $escalation
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $inventory_org_id
 * @property string $close_date
 * @property string $order_reference_table
 * @property integer $order_reference_id
 * @property string $repair_status
 * @property string $estimate_status
 * @property integer $primary_sd_so_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSvoHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_svo_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'hd_service_type_header_id', 'ar_customer_id', 'ship_to_id', 'bill_to_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'hd_service_type_header_id', 'hd_service_request_id', 'ar_customer_id', 'ar_customer_site_id', 'service_team_id', 'service_person_employee_id', 'price_list_header_id', 'ship_to_id', 'bill_to_id', 'item_id_m', 'inv_serial_number_id', 'lot_number_id', 'payment_term_id', 'inventory_org_id', 'order_reference_id', 'primary_sd_so_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['promise_date', 'payment_term_date', 'close_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity', 'estimate_amount', 'prepaid_amount', 'exchange_rate'], 'number'],
            [['order_number', 'exchange_rate_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['doc_currency', 'prepaid_status', 'warrenty_status', 'escalation', 'repair_status', 'estimate_status'], 'string', 'max' => 25],
            [['currency'], 'string', 'max' => 20],
            [['order_reference_table'], 'string', 'max' => 100],
            [['primary_sd_so_header_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_svo_header_id' => Yii::t('app', 'Hd Svo Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'hd_service_type_header_id' => Yii::t('app', 'Hd Service Type Header ID'),
            'order_number' => Yii::t('app', 'Order Number'),
            'hd_service_request_id' => Yii::t('app', 'Hd Service Request ID'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'service_team_id' => Yii::t('app', 'Service Team ID'),
            'service_person_employee_id' => Yii::t('app', 'Service Person Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'lot_number_id' => Yii::t('app', 'Lot Number ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'estimate_amount' => Yii::t('app', 'Estimate Amount'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'prepaid_status' => Yii::t('app', 'Prepaid Status'),
            'prepaid_amount' => Yii::t('app', 'Prepaid Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'payment_term_date' => Yii::t('app', 'Payment Term Date'),
            'warrenty_status' => Yii::t('app', 'Warrenty Status'),
            'escalation' => Yii::t('app', 'Escalation'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'inventory_org_id' => Yii::t('app', 'Inventory Org ID'),
            'close_date' => Yii::t('app', 'Close Date'),
            'order_reference_table' => Yii::t('app', 'Order Reference Table'),
            'order_reference_id' => Yii::t('app', 'Order Reference ID'),
            'repair_status' => Yii::t('app', 'Repair Status'),
            'estimate_status' => Yii::t('app', 'Estimate Status'),
            'primary_sd_so_header_id' => Yii::t('app', 'Primary Sd So Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
