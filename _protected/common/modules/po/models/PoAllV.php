<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_all_v}}".
 *
 * @property integer $po_header_id
 * @property integer $bu_org_id
 * @property string $po_type
 * @property string $po_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $buyer
 * @property string $currency
 * @property string $doc_currency
 * @property string $header_amount
 * @property string $po_status
 * @property integer $payment_term_id
 * @property string $exchange_rate
 * @property string $exchange_rate_type
 * @property string $supplier_name
 * @property integer $supplier_number
 * @property string $supplier_site_name
 * @property integer $supplier_site_number
 * @property string $payment_term
 * @property string $payment_term_description
 * @property integer $po_line_id
 * @property string $line_type
 * @property integer $po_line_number
 * @property integer $item_id_m
 * @property integer $kit_cb
 * @property string $revision_name
 * @property string $item_description
 * @property string $line_description
 * @property string $line_quantity
 * @property string $unit_price
 * @property string $line_price
 * @property string $gl_line_price
 * @property string $gl_tax_amount
 * @property string $item_number
 * @property integer $uom_id
 * @property string $item_status
 * @property string $serial_generation
 * @property string $lot_generation
 * @property integer $po_detail_id
 * @property integer $shipment_number
 * @property integer $receving_org_id
 * @property integer $org_id
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $requestor
 * @property string $quantity
 * @property string $received_quantity
 * @property string $open_quantity
 * @property string $need_by_date
 * @property string $promise_date
 * @property integer $accepted_quantity
 * @property integer $delivered_quantity
 * @property integer $invoiced_quantity
 * @property integer $paid_quantity
 * @property integer $charge_ac_id
 * @property integer $accrual_ac_id
 * @property integer $budget_ac_id
 * @property integer $ppv_ac_id
 * @property string $receving_org
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class PoAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_header_id', 'bu_org_id', 'supplier_id', 'supplier_site_id', 'payment_term_id', 'supplier_number', 'supplier_site_number', 'po_line_id', 'po_line_number', 'item_id_m', 'kit_cb', 'uom_id', 'po_detail_id', 'shipment_number', 'receving_org_id', 'org_id', 'subinventory_id', 'locator_id', 'received_quantity', 'accepted_quantity', 'delivered_quantity', 'invoiced_quantity', 'paid_quantity', 'charge_ac_id', 'accrual_ac_id', 'budget_ac_id', 'ppv_ac_id', 'created_by', 'last_update_by'], 'integer'],
            [['bu_org_id', 'po_type', 'supplier_id', 'supplier_site_id', 'currency', 'doc_currency', 'po_status', 'payment_term_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['header_amount', 'exchange_rate', 'line_quantity', 'unit_price', 'line_price', 'gl_line_price', 'gl_tax_amount', 'quantity', 'open_quantity'], 'number'],
            [['need_by_date', 'promise_date', 'creation_date', 'last_update_date'], 'safe'],
            [['po_type', 'po_number', 'po_status', 'exchange_rate_type'], 'string', 'max' => 20],
            [['buyer', 'payment_term', 'line_type', 'item_number', 'receving_org'], 'string', 'max' => 50],
            [['currency', 'doc_currency'], 'string', 'max' => 5],
            [['supplier_name', 'supplier_site_name'], 'string', 'max' => 60],
            [['payment_term_description', 'item_description', 'line_description', 'requestor'], 'string', 'max' => 256],
            [['revision_name'], 'string', 'max' => 10],
            [['item_status'], 'string', 'max' => 15],
            [['serial_generation', 'lot_generation'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'po_type' => Yii::t('app', 'Po Type'),
            'po_number' => Yii::t('app', 'Po Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'buyer' => Yii::t('app', 'Buyer'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'po_status' => Yii::t('app', 'Po Status'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'supplier_name' => Yii::t('app', 'Supplier Name'),
            'supplier_number' => Yii::t('app', 'Supplier Number'),
            'supplier_site_name' => Yii::t('app', 'Supplier Site Name'),
            'supplier_site_number' => Yii::t('app', 'Supplier Site Number'),
            'payment_term' => Yii::t('app', 'Payment Term'),
            'payment_term_description' => Yii::t('app', 'Payment Term Description'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'po_line_number' => Yii::t('app', 'Po Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'kit_cb' => Yii::t('app', 'Kit Cb'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_description' => Yii::t('app', 'Line Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'gl_line_price' => Yii::t('app', 'Gl Line Price'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'item_number' => Yii::t('app', 'Item Number'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'item_status' => Yii::t('app', 'Item Status'),
            'serial_generation' => Yii::t('app', 'Serial Generation'),
            'lot_generation' => Yii::t('app', 'Lot Generation'),
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'shipment_number' => Yii::t('app', 'Shipment Number'),
            'receving_org_id' => Yii::t('app', 'Receving Org ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'requestor' => Yii::t('app', 'Requestor'),
            'quantity' => Yii::t('app', 'Quantity'),
            'received_quantity' => Yii::t('app', 'Received Quantity'),
            'open_quantity' => Yii::t('app', 'Open Quantity'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'accepted_quantity' => Yii::t('app', 'Accepted Quantity'),
            'delivered_quantity' => Yii::t('app', 'Delivered Quantity'),
            'invoiced_quantity' => Yii::t('app', 'Invoiced Quantity'),
            'paid_quantity' => Yii::t('app', 'Paid Quantity'),
            'charge_ac_id' => Yii::t('app', 'Charge Ac ID'),
            'accrual_ac_id' => Yii::t('app', 'Accrual Ac ID'),
            'budget_ac_id' => Yii::t('app', 'Budget Ac ID'),
            'ppv_ac_id' => Yii::t('app', 'Ppv Ac ID'),
            'receving_org' => Yii::t('app', 'Receving Org'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}