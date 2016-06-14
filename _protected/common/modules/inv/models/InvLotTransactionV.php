<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_lot_transaction_v}}".
 *
 * @property integer $inv_lot_transaction_id
 * @property integer $inv_transaction_id
 * @property integer $inv_lot_number_id
 * @property string $lot_number
 * @property integer $transaction_type_id
 * @property string $transaction_type
 * @property integer $org_id
 * @property string $item_number
 * @property string $item_description
 * @property integer $item_id_m
 * @property string $from_subinventory
 * @property string $to_subinventory
 * @property string $from_locator
 * @property string $to_locator
 * @property integer $uom_id
 * @property integer $lot_number_id
 * @property string $document_type
 * @property string $document_number
 * @property integer $document_id
 * @property integer $po_header_id
 * @property integer $po_line_id
 * @property integer $po_detail_id
 * @property integer $sd_so_line_id
 * @property string $reason
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $description
 * @property integer $from_org_id
 * @property integer $from_subinventory_id
 * @property integer $to_org_id
 * @property integer $to_subinventory_id
 * @property integer $from_locator_id
 * @property integer $to_locator_id
 */
class InvLotTransactionV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_lot_transaction_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_lot_transaction_id', 'inv_transaction_id', 'inv_lot_number_id', 'transaction_type_id', 'org_id', 'item_id_m', 'uom_id', 'lot_number_id', 'document_id', 'po_header_id', 'po_line_id', 'po_detail_id', 'sd_so_line_id', 'from_org_id', 'from_subinventory_id', 'to_org_id', 'to_subinventory_id', 'from_locator_id', 'to_locator_id'], 'integer'],
            [['inv_transaction_id', 'inv_lot_number_id'], 'required'],
            [['lot_number', 'item_number', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 50],
            [['transaction_type'], 'string', 'max' => 40],
            [['item_description', 'from_locator', 'to_locator', 'description'], 'string', 'max' => 256],
            [['from_subinventory', 'to_subinventory', 'document_type', 'document_number', 'reason'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_lot_transaction_id' => Yii::t('app', 'Inv Lot Transaction ID'),
            'inv_transaction_id' => Yii::t('app', 'Inv Transaction ID'),
            'inv_lot_number_id' => Yii::t('app', 'Inv Lot Number ID'),
            'lot_number' => Yii::t('app', 'Lot Number'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'from_subinventory' => Yii::t('app', 'From Subinventory'),
            'to_subinventory' => Yii::t('app', 'To Subinventory'),
            'from_locator' => Yii::t('app', 'From Locator'),
            'to_locator' => Yii::t('app', 'To Locator'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'lot_number_id' => Yii::t('app', 'Lot Number ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'document_number' => Yii::t('app', 'Document Number'),
            'document_id' => Yii::t('app', 'Document ID'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'reason' => Yii::t('app', 'Reason'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'description' => Yii::t('app', 'Description'),
            'from_org_id' => Yii::t('app', 'From Org ID'),
            'from_subinventory_id' => Yii::t('app', 'From Subinventory ID'),
            'to_org_id' => Yii::t('app', 'To Org ID'),
            'to_subinventory_id' => Yii::t('app', 'To Subinventory ID'),
            'from_locator_id' => Yii::t('app', 'From Locator ID'),
            'to_locator_id' => Yii::t('app', 'To Locator ID'),
        ];
    }
}
