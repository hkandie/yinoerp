<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_interorg_transfer_v}}".
 *
 * @property integer $inv_interorg_transfer_header_id
 * @property string $order_number
 * @property string $io_order_number
 * @property integer $line_number
 * @property integer $io_line_number
 * @property string $item_number
 * @property string $status
 * @property integer $inv_interorg_transfer_line_id
 * @property string $comment
 * @property integer $from_org_id
 * @property integer $transaction_type_id
 * @property integer $to_org_id
 * @property string $carrier
 * @property string $vehicle_number
 * @property string $waybill
 * @property integer $uom_id
 * @property integer $from_subinventory_id
 * @property integer $from_locator_id
 * @property integer $item_id_m
 * @property string $item_description
 * @property integer $to_subinventory_id
 * @property integer $to_locator_id
 * @property integer $transaction_quantity
 * @property string $serial_number
 * @property string $lot_number
 */
class InvInterorgTransferV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_interorg_transfer_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_interorg_transfer_header_id', 'line_number', 'io_line_number', 'inv_interorg_transfer_line_id', 'from_org_id', 'transaction_type_id', 'to_org_id', 'uom_id', 'from_subinventory_id', 'from_locator_id', 'item_id_m', 'to_subinventory_id', 'to_locator_id', 'transaction_quantity'], 'integer'],
            [['item_number', 'from_org_id', 'to_org_id', 'from_subinventory_id', 'transaction_quantity'], 'required'],
            [['order_number', 'io_order_number', 'status'], 'string', 'max' => 25],
            [['item_number', 'waybill'], 'string', 'max' => 50],
            [['comment', 'carrier', 'vehicle_number', 'item_description', 'serial_number', 'lot_number'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_interorg_transfer_header_id' => Yii::t('app', 'Inv Interorg Transfer Header ID'),
            'order_number' => Yii::t('app', 'Order Number'),
            'io_order_number' => Yii::t('app', 'Io Order Number'),
            'line_number' => Yii::t('app', 'Line Number'),
            'io_line_number' => Yii::t('app', 'Io Line Number'),
            'item_number' => Yii::t('app', 'Item Number'),
            'status' => Yii::t('app', 'Status'),
            'inv_interorg_transfer_line_id' => Yii::t('app', 'Inv Interorg Transfer Line ID'),
            'comment' => Yii::t('app', 'Comment'),
            'from_org_id' => Yii::t('app', 'From Org ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'to_org_id' => Yii::t('app', 'To Org ID'),
            'carrier' => Yii::t('app', 'Carrier'),
            'vehicle_number' => Yii::t('app', 'Vehicle Number'),
            'waybill' => Yii::t('app', 'Waybill'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'from_subinventory_id' => Yii::t('app', 'From Subinventory ID'),
            'from_locator_id' => Yii::t('app', 'From Locator ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'to_subinventory_id' => Yii::t('app', 'To Subinventory ID'),
            'to_locator_id' => Yii::t('app', 'To Locator ID'),
            'transaction_quantity' => Yii::t('app', 'Transaction Quantity'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'lot_number' => Yii::t('app', 'Lot Number'),
        ];
    }
}
