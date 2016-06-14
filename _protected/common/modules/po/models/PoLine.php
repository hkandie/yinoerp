<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_line}}".
 *
 * @property integer $po_line_id
 * @property integer $po_header_id
 * @property integer $line_number
 * @property integer $bpa_line_id
 * @property integer $receving_org_id
 * @property integer $item_id_m
 * @property string $revision_name
 * @property string $item_description
 * @property string $line_quantity
 * @property integer $price_list_header_id
 * @property string $price_date
 * @property string $unit_price
 * @property string $line_price
 * @property integer $tax_code_id
 * @property string $tax_amount
 * @property string $gl_line_price
 * @property string $gl_tax_amount
 * @property string $exchange_rate
 * @property string $reference_doc_type
 * @property integer $reference_doc_number
 * @property string $line_type
 * @property string $line_description
 * @property integer $uom_id
 * @property integer $kit_configured_cb
 * @property integer $hold_cb
 * @property integer $kit_cb
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $company_id
 */
class PoLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_header_id', 'line_number', 'receving_org_id', 'item_id_m', 'item_description', 'line_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_header_id', 'line_number', 'bpa_line_id', 'receving_org_id', 'item_id_m', 'price_list_header_id', 'tax_code_id', 'reference_doc_number', 'uom_id', 'kit_configured_cb', 'hold_cb', 'kit_cb', 'created_by', 'last_update_by', 'rev_enabled_cb', 'rev_number', 'company_id'], 'integer'],
            [['line_quantity', 'unit_price', 'line_price', 'tax_amount', 'gl_line_price', 'gl_tax_amount', 'exchange_rate'], 'number'],
            [['price_date', 'creation_date', 'last_update_date'], 'safe'],
            [['revision_name'], 'string', 'max' => 10],
            [['item_description', 'line_description'], 'string', 'max' => 256],
            [['reference_doc_type', 'line_type', 'status'], 'string', 'max' => 50],
            [['po_header_id', 'line_number'], 'unique', 'targetAttribute' => ['po_header_id', 'line_number'], 'message' => 'The combination of Po Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'bpa_line_id' => Yii::t('app', 'Bpa Line ID'),
            'receving_org_id' => Yii::t('app', 'Receving Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'gl_line_price' => Yii::t('app', 'Gl Line Price'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'reference_doc_type' => Yii::t('app', 'Reference Doc Type'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'kit_configured_cb' => Yii::t('app', 'Kit Configured Cb'),
            'hold_cb' => Yii::t('app', 'Hold Cb'),
            'kit_cb' => Yii::t('app', 'Kit Cb'),
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
