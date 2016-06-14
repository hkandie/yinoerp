<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_receipt_line}}".
 *
 * @property integer $inv_receipt_line_id
 * @property integer $inv_receipt_header_id
 * @property integer $transaction_type_id
 * @property string $line_number
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property integer $item_id_m
 * @property string $revision_name
 * @property string $item_description
 * @property string $status
 * @property integer $uom_id
 * @property integer $receving_account_id
 * @property integer $accrual_account_id
 * @property integer $transaction_quantity
 * @property string $ref_doc_type
 * @property string $ref_doc_number
 * @property integer $po_header_id
 * @property integer $po_line_id
 * @property integer $po_detail_id
 * @property integer $sd_so_line_id
 * @property integer $sd_so_header_id
 * @property integer $inv_interorg_transfer_header_id
 * @property integer $inv_interorg_transfer_line_id
 * @property integer $country_of_origin
 * @property string $lot_number
 * @property string $serial_number
 * @property string $currency
 * @property string $doc_currency
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvReceiptLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_receipt_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_receipt_header_id', 'transaction_type_id', 'line_number', 'subinventory_id', 'transaction_quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['inv_receipt_header_id', 'transaction_type_id', 'subinventory_id', 'locator_id', 'item_id_m', 'uom_id', 'receving_account_id', 'accrual_account_id', 'transaction_quantity', 'po_header_id', 'po_line_id', 'po_detail_id', 'sd_so_line_id', 'sd_so_header_id', 'inv_interorg_transfer_header_id', 'inv_interorg_transfer_line_id', 'country_of_origin', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['exchange_rate'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['line_number', 'status'], 'string', 'max' => 25],
            [['revision_name'], 'string', 'max' => 12],
            [['item_description', 'ref_doc_type', 'ref_doc_number', 'lot_number', 'serial_number'], 'string', 'max' => 256],
            [['currency', 'doc_currency'], 'string', 'max' => 5],
            [['exchange_rate_type'], 'string', 'max' => 10],
            [['inv_receipt_header_id', 'line_number'], 'unique', 'targetAttribute' => ['inv_receipt_header_id', 'line_number'], 'message' => 'The combination of Inv Receipt Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_receipt_line_id' => Yii::t('app', 'Inv Receipt Line ID'),
            'inv_receipt_header_id' => Yii::t('app', 'Inv Receipt Header ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_description' => Yii::t('app', 'Item Description'),
            'status' => Yii::t('app', 'Status'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'receving_account_id' => Yii::t('app', 'Receving Account ID'),
            'accrual_account_id' => Yii::t('app', 'Accrual Account ID'),
            'transaction_quantity' => Yii::t('app', 'Transaction Quantity'),
            'ref_doc_type' => Yii::t('app', 'Ref Doc Type'),
            'ref_doc_number' => Yii::t('app', 'Ref Doc Number'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'inv_interorg_transfer_header_id' => Yii::t('app', 'Inv Interorg Transfer Header ID'),
            'inv_interorg_transfer_line_id' => Yii::t('app', 'Inv Interorg Transfer Line ID'),
            'country_of_origin' => Yii::t('app', 'Country Of Origin'),
            'lot_number' => Yii::t('app', 'Lot Number'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
