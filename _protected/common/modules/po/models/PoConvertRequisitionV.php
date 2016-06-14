<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_convert_requisition_v}}".
 *
 * @property integer $po_requisition_header_id
 * @property integer $bu_org_id
 * @property string $po_requisition_type
 * @property string $po_requisition_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $buyer
 * @property string $currency
 * @property string $header_amount
 * @property string $requisition_status
 * @property string $payment_term_id
 * @property string $supplier_name
 * @property integer $supplier_number
 * @property string $supplier_site_name
 * @property integer $supplier_site_number
 * @property string $payment_term
 * @property string $payment_term_description
 * @property integer $po_requisition_line_id
 * @property string $line_type
 * @property integer $po_requisition_line_number
 * @property integer $item_id_m
 * @property integer $bpa_po_line_id
 * @property string $item_description
 * @property string $line_description
 * @property string $line_quantity
 * @property string $unit_price
 * @property string $line_price
 * @property integer $receving_org_id
 * @property string $item_number
 * @property integer $uom_id
 * @property string $item_status
 * @property integer $po_requisition_detail_id
 * @property integer $shipment_number
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $requestor
 * @property string $quantity
 * @property string $need_by_date
 * @property string $promise_date
 * @property integer $received_quantity
 * @property integer $accepted_quantity
 * @property integer $delivered_quantity
 * @property integer $invoiced_quantity
 * @property integer $paid_quantity
 * @property string $order_number
 * @property string $ship_to_org
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class PoConvertRequisitionV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_convert_requisition_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_requisition_header_id', 'bu_org_id', 'supplier_id', 'supplier_site_id', 'payment_term_id', 'supplier_number', 'supplier_site_number', 'po_requisition_line_id', 'po_requisition_line_number', 'item_id_m', 'bpa_po_line_id', 'receving_org_id', 'uom_id', 'po_requisition_detail_id', 'shipment_number', 'subinventory_id', 'locator_id', 'received_quantity', 'accepted_quantity', 'delivered_quantity', 'invoiced_quantity', 'paid_quantity', 'created_by', 'last_update_by'], 'integer'],
            [['bu_org_id', 'po_requisition_type', 'requisition_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['header_amount', 'line_quantity', 'unit_price', 'line_price', 'quantity'], 'number'],
            [['need_by_date', 'promise_date', 'creation_date', 'last_update_date'], 'safe'],
            [['po_requisition_type', 'po_requisition_number', 'requisition_status', 'payment_term', 'line_type', 'item_number', 'order_number', 'ship_to_org'], 'string', 'max' => 50],
            [['buyer', 'currency', 'payment_term_description', 'item_description', 'line_description', 'requestor'], 'string', 'max' => 256],
            [['supplier_name', 'supplier_site_name'], 'string', 'max' => 60],
            [['item_status'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_requisition_header_id' => Yii::t('app', 'Po Requisition Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'po_requisition_type' => Yii::t('app', 'Po Requisition Type'),
            'po_requisition_number' => Yii::t('app', 'Po Requisition Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'buyer' => Yii::t('app', 'Buyer'),
            'currency' => Yii::t('app', 'Currency'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'requisition_status' => Yii::t('app', 'Requisition Status'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'supplier_name' => Yii::t('app', 'Supplier Name'),
            'supplier_number' => Yii::t('app', 'Supplier Number'),
            'supplier_site_name' => Yii::t('app', 'Supplier Site Name'),
            'supplier_site_number' => Yii::t('app', 'Supplier Site Number'),
            'payment_term' => Yii::t('app', 'Payment Term'),
            'payment_term_description' => Yii::t('app', 'Payment Term Description'),
            'po_requisition_line_id' => Yii::t('app', 'Po Requisition Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'po_requisition_line_number' => Yii::t('app', 'Po Requisition Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'bpa_po_line_id' => Yii::t('app', 'Bpa Po Line ID'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_description' => Yii::t('app', 'Line Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'receving_org_id' => Yii::t('app', 'Receving Org ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'item_status' => Yii::t('app', 'Item Status'),
            'po_requisition_detail_id' => Yii::t('app', 'Po Requisition Detail ID'),
            'shipment_number' => Yii::t('app', 'Shipment Number'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'requestor' => Yii::t('app', 'Requestor'),
            'quantity' => Yii::t('app', 'Quantity'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'received_quantity' => Yii::t('app', 'Received Quantity'),
            'accepted_quantity' => Yii::t('app', 'Accepted Quantity'),
            'delivered_quantity' => Yii::t('app', 'Delivered Quantity'),
            'invoiced_quantity' => Yii::t('app', 'Invoiced Quantity'),
            'paid_quantity' => Yii::t('app', 'Paid Quantity'),
            'order_number' => Yii::t('app', 'Order Number'),
            'ship_to_org' => Yii::t('app', 'Ship To Org'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
