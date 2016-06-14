<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_detail}}".
 *
 * @property integer $po_detail_id
 * @property integer $po_line_id
 * @property integer $po_header_id
 * @property integer $shipment_number
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $invoice_match_type
 * @property string $requestor
 * @property integer $ship_to_location_id
 * @property integer $uom
 * @property string $quantity
 * @property string $need_by_date
 * @property string $promise_date
 * @property integer $charge_ac_id
 * @property integer $accrual_ac_id
 * @property integer $budget_ac_id
 * @property integer $ppv_ac_id
 * @property integer $received_quantity
 * @property integer $accepted_quantity
 * @property integer $delivered_quantity
 * @property integer $invoiced_quantity
 * @property integer $paid_quantity
 * @property integer $ef_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_line_id', 'po_header_id', 'shipment_number', 'need_by_date', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_line_id', 'po_header_id', 'shipment_number', 'subinventory_id', 'locator_id', 'ship_to_location_id', 'uom', 'charge_ac_id', 'accrual_ac_id', 'budget_ac_id', 'ppv_ac_id', 'received_quantity', 'accepted_quantity', 'delivered_quantity', 'invoiced_quantity', 'paid_quantity', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity'], 'number'],
            [['need_by_date', 'promise_date', 'creation_date', 'last_update_date'], 'safe'],
            [['invoice_match_type'], 'string', 'max' => 25],
            [['requestor'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'shipment_number' => Yii::t('app', 'Shipment Number'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'invoice_match_type' => Yii::t('app', 'Invoice Match Type'),
            'requestor' => Yii::t('app', 'Requestor'),
            'ship_to_location_id' => Yii::t('app', 'Ship To Location ID'),
            'uom' => Yii::t('app', 'Uom'),
            'quantity' => Yii::t('app', 'Quantity'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'charge_ac_id' => Yii::t('app', 'Charge Ac ID'),
            'accrual_ac_id' => Yii::t('app', 'Accrual Ac ID'),
            'budget_ac_id' => Yii::t('app', 'Budget Ac ID'),
            'ppv_ac_id' => Yii::t('app', 'Ppv Ac ID'),
            'received_quantity' => Yii::t('app', 'Received Quantity'),
            'accepted_quantity' => Yii::t('app', 'Accepted Quantity'),
            'delivered_quantity' => Yii::t('app', 'Delivered Quantity'),
            'invoiced_quantity' => Yii::t('app', 'Invoiced Quantity'),
            'paid_quantity' => Yii::t('app', 'Paid Quantity'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
