<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_quote_line}}".
 *
 * @property integer $po_quote_line_id
 * @property integer $po_quote_header_id
 * @property integer $po_rfq_line_id
 * @property integer $line_number
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $mfg_part_number
 * @property string $manufacturer
 * @property string $supplier_part_number
 * @property string $minimum_agreement_quantity
 * @property string $minimum_order_quantity
 * @property integer $fix_lot_multiplier
 * @property string $daily_capacity
 * @property integer $processing_lead_time
 * @property integer $replenishment_lead_time
 * @property integer $uom_id
 * @property string $quote_unit_price
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoQuoteLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_quote_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_quote_header_id', 'po_rfq_line_id', 'line_number', 'item_description', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_quote_header_id', 'po_rfq_line_id', 'line_number', 'item_id_m', 'fix_lot_multiplier', 'processing_lead_time', 'replenishment_lead_time', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['minimum_agreement_quantity', 'minimum_order_quantity', 'daily_capacity', 'quote_unit_price'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['item_description'], 'string', 'max' => 256],
            [['mfg_part_number', 'manufacturer', 'supplier_part_number', 'status'], 'string', 'max' => 50],
            [['po_quote_header_id', 'line_number'], 'unique', 'targetAttribute' => ['po_quote_header_id', 'line_number'], 'message' => 'The combination of Po Quote Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_quote_line_id' => Yii::t('app', 'Po Quote Line ID'),
            'po_quote_header_id' => Yii::t('app', 'Po Quote Header ID'),
            'po_rfq_line_id' => Yii::t('app', 'Po Rfq Line ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'mfg_part_number' => Yii::t('app', 'Mfg Part Number'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'supplier_part_number' => Yii::t('app', 'Supplier Part Number'),
            'minimum_agreement_quantity' => Yii::t('app', 'Minimum Agreement Quantity'),
            'minimum_order_quantity' => Yii::t('app', 'Minimum Order Quantity'),
            'fix_lot_multiplier' => Yii::t('app', 'Fix Lot Multiplier'),
            'daily_capacity' => Yii::t('app', 'Daily Capacity'),
            'processing_lead_time' => Yii::t('app', 'Processing Lead Time'),
            'replenishment_lead_time' => Yii::t('app', 'Replenishment Lead Time'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quote_unit_price' => Yii::t('app', 'Quote Unit Price'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
