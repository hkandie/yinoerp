<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_quote_line}}".
 *
 * @property integer $sd_quote_line_id
 * @property integer $sd_quote_header_id
 * @property integer $line_number
 * @property integer $shipping_org_id
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $line_quantity
 * @property integer $price_list_header_id
 * @property string $price_date
 * @property string $unit_price
 * @property string $line_price
 * @property string $tax_amount
 * @property integer $tax_code_id
 * @property string $line_status
 * @property string $requested_date
 * @property string $promise_date
 * @property integer $reference_doc_type
 * @property integer $reference_doc_number
 * @property string $sd_so_header_id
 * @property string $sd_so_line_id
 * @property string $line_type
 * @property string $destination_type
 * @property string $line_description
 * @property string $uom_id
 * @property string $new_item_number
 * @property string $new_item_description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $company_id
 */
class SdQuoteLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_quote_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_quote_header_id', 'line_number', 'shipping_org_id', 'item_description', 'line_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['sd_quote_header_id', 'line_number', 'shipping_org_id', 'item_id_m', 'price_list_header_id', 'tax_code_id', 'reference_doc_type', 'reference_doc_number', 'sd_so_header_id', 'sd_so_line_id', 'created_by', 'last_update_by', 'rev_enabled_cb', 'rev_number', 'company_id'], 'integer'],
            [['line_quantity', 'unit_price', 'line_price', 'tax_amount'], 'number'],
            [['price_date', 'requested_date', 'promise_date', 'creation_date', 'last_update_date'], 'safe'],
            [['item_description', 'line_description', 'new_item_description'], 'string', 'max' => 256],
            [['line_status', 'line_type', 'destination_type', 'uom_id'], 'string', 'max' => 25],
            [['new_item_number'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_quote_line_id' => Yii::t('app', 'Sd Quote Line ID'),
            'sd_quote_header_id' => Yii::t('app', 'Sd Quote Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'line_status' => Yii::t('app', 'Line Status'),
            'requested_date' => Yii::t('app', 'Requested Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'reference_doc_type' => Yii::t('app', 'Reference Doc Type'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'destination_type' => Yii::t('app', 'Destination Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'new_item_number' => Yii::t('app', 'New Item Number'),
            'new_item_description' => Yii::t('app', 'New Item Description'),
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
