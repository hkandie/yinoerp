<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_rfq_line}}".
 *
 * @property integer $po_rfq_line_id
 * @property integer $po_rfq_header_id
 * @property integer $line_number
 * @property string $mfg_part_number
 * @property string $manufacturer
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $minimum_quantity
 * @property string $maximum_quantity
 * @property string $target_price
 * @property string $unit_price
 * @property integer $reference_doc_number
 * @property string $line_type
 * @property string $line_description
 * @property string $notes_from_supplier
 * @property integer $uom_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoRfqLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_rfq_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_rfq_header_id', 'line_number', 'item_description', 'line_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_rfq_header_id', 'line_number', 'item_id_m', 'reference_doc_number', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['minimum_quantity', 'maximum_quantity', 'target_price', 'unit_price'], 'number'],
            [['notes_from_supplier'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['mfg_part_number', 'manufacturer', 'line_type', 'status'], 'string', 'max' => 50],
            [['item_description', 'line_description'], 'string', 'max' => 256],
            [['po_rfq_header_id', 'line_number'], 'unique', 'targetAttribute' => ['po_rfq_header_id', 'line_number'], 'message' => 'The combination of Po Rfq Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_rfq_line_id' => Yii::t('app', 'Po Rfq Line ID'),
            'po_rfq_header_id' => Yii::t('app', 'Po Rfq Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'mfg_part_number' => Yii::t('app', 'Mfg Part Number'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'minimum_quantity' => Yii::t('app', 'Minimum Quantity'),
            'maximum_quantity' => Yii::t('app', 'Maximum Quantity'),
            'target_price' => Yii::t('app', 'Target Price'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'notes_from_supplier' => Yii::t('app', 'Notes From Supplier'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
