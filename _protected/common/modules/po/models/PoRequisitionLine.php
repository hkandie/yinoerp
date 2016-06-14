<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_requisition_line}}".
 *
 * @property integer $po_requisition_line_id
 * @property integer $po_requisition_header_id
 * @property integer $line_number
 * @property integer $receving_org_id
 * @property integer $item_id_m
 * @property integer $bpa_po_line_id
 * @property string $item_description
 * @property string $line_quantity
 * @property string $unit_price
 * @property string $line_price
 * @property integer $reference_doc_type
 * @property integer $reference_doc_number
 * @property integer $price_list_header_id
 * @property string $price_date
 * @property string $line_type
 * @property string $line_description
 * @property integer $uom_id
 * @property integer $ef_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $company_id
 */
class PoRequisitionLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_requisition_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_requisition_header_id', 'line_number', 'item_description', 'line_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_requisition_header_id', 'line_number', 'receving_org_id', 'item_id_m', 'bpa_po_line_id', 'reference_doc_type', 'reference_doc_number', 'price_list_header_id', 'uom_id', 'ef_id', 'created_by', 'last_update_by', 'rev_enabled_cb', 'rev_number', 'company_id'], 'integer'],
            [['line_quantity', 'unit_price', 'line_price'], 'number'],
            [['price_date'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['item_description', 'line_description'], 'string', 'max' => 256],
            [['line_type', 'status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_requisition_line_id' => Yii::t('app', 'Po Requisition Line ID'),
            'po_requisition_header_id' => Yii::t('app', 'Po Requisition Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'receving_org_id' => Yii::t('app', 'Receving Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'bpa_po_line_id' => Yii::t('app', 'Bpa Po Line ID'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'reference_doc_type' => Yii::t('app', 'Reference Doc Type'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
