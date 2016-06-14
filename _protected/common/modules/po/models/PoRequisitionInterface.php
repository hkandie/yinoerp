<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_requisition_interface}}".
 *
 * @property integer $po_requisition_interface_id
 * @property integer $bu_org_id
 * @property string $po_requisition_type
 * @property integer $receving_org_id
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $buyer
 * @property string $description
 * @property string $line_type
 * @property integer $item_id_m
 * @property integer $bpa_po_line_id
 * @property string $item_description
 * @property string $currency
 * @property integer $uom_id
 * @property string $quantity
 * @property string $unit_price
 * @property string $need_by_date
 * @property string $reference_type
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $requisition_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoRequisitionInterface extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_requisition_interface}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'po_requisition_type', 'line_type', 'item_description', 'quantity', 'unit_price', 'need_by_date', 'requisition_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'receving_org_id', 'supplier_id', 'supplier_site_id', 'item_id_m', 'bpa_po_line_id', 'uom_id', 'reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'unit_price'], 'number'],
            [['need_by_date', 'creation_date', 'last_update_date'], 'safe'],
            [['po_requisition_type', 'requisition_status'], 'string', 'max' => 50],
            [['buyer', 'description', 'item_description', 'currency'], 'string', 'max' => 256],
            [['line_type', 'reference_type', 'reference_key_name'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_requisition_interface_id' => Yii::t('app', 'Po Requisition Interface ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'po_requisition_type' => Yii::t('app', 'Po Requisition Type'),
            'receving_org_id' => Yii::t('app', 'Receving Org ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'buyer' => Yii::t('app', 'Buyer'),
            'description' => Yii::t('app', 'Description'),
            'line_type' => Yii::t('app', 'Line Type'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'bpa_po_line_id' => Yii::t('app', 'Bpa Po Line ID'),
            'item_description' => Yii::t('app', 'Item Description'),
            'currency' => Yii::t('app', 'Currency'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'requisition_status' => Yii::t('app', 'Requisition Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
