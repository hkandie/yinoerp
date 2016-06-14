<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_so_line}}".
 *
 * @property integer $sd_so_line_id
 * @property integer $sd_so_header_id
 * @property integer $line_number
 * @property integer $shipping_org_id
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $line_quantity
 * @property string $picked_quantity
 * @property string $shipped_quantity
 * @property string $invoiced_quantity
 * @property integer $price_list_header_id
 * @property string $price_date
 * @property string $unit_price
 * @property string $line_price
 * @property string $tax_amount
 * @property string $gl_line_price
 * @property string $gl_tax_amount
 * @property integer $tax_code_id
 * @property string $line_status
 * @property string $requested_date
 * @property string $promise_date
 * @property string $schedule_ship_date
 * @property string $actual_ship_date
 * @property integer $reference_doc_type
 * @property integer $reference_doc_number
 * @property string $ar_transaction_header_id
 * @property string $ar_transaction_line_id
 * @property string $line_type
 * @property string $supply_source
 * @property string $destination_type
 * @property string $line_description
 * @property string $uom_id
 * @property integer $kit_cb
 * @property integer $kit_configured_cb
 * @property integer $bom_config_header_id
 * @property integer $wip_wo_header_id
 * @property string $so_status
 * @property integer $sys_spd_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdSoLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_so_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_so_header_id', 'line_number', 'shipping_org_id', 'item_description', 'line_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['sd_so_header_id', 'line_number', 'shipping_org_id', 'item_id_m', 'price_list_header_id', 'tax_code_id', 'reference_doc_type', 'reference_doc_number', 'ar_transaction_header_id', 'ar_transaction_line_id', 'kit_cb', 'kit_configured_cb', 'bom_config_header_id', 'wip_wo_header_id', 'sys_spd_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['line_quantity', 'picked_quantity', 'shipped_quantity', 'invoiced_quantity', 'unit_price', 'line_price', 'tax_amount', 'gl_line_price', 'gl_tax_amount'], 'number'],
            [['price_date', 'requested_date', 'promise_date', 'schedule_ship_date', 'actual_ship_date', 'creation_date', 'last_update_date'], 'safe'],
            [['item_description', 'line_description'], 'string', 'max' => 256],
            [['line_status', 'line_type', 'supply_source', 'destination_type', 'uom_id'], 'string', 'max' => 25],
            [['so_status'], 'string', 'max' => 50],
            [['sd_so_header_id', 'line_number'], 'unique', 'targetAttribute' => ['sd_so_header_id', 'line_number'], 'message' => 'The combination of Sd So Header ID and Line Number has already been taken.'],
            [['sd_so_header_id', 'item_id_m', 'requested_date'], 'unique', 'targetAttribute' => ['sd_so_header_id', 'item_id_m', 'requested_date'], 'message' => 'The combination of Sd So Header ID, Item Id M and Requested Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'picked_quantity' => Yii::t('app', 'Picked Quantity'),
            'shipped_quantity' => Yii::t('app', 'Shipped Quantity'),
            'invoiced_quantity' => Yii::t('app', 'Invoiced Quantity'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'gl_line_price' => Yii::t('app', 'Gl Line Price'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'line_status' => Yii::t('app', 'Line Status'),
            'requested_date' => Yii::t('app', 'Requested Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'schedule_ship_date' => Yii::t('app', 'Schedule Ship Date'),
            'actual_ship_date' => Yii::t('app', 'Actual Ship Date'),
            'reference_doc_type' => Yii::t('app', 'Reference Doc Type'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'ar_transaction_header_id' => Yii::t('app', 'Ar Transaction Header ID'),
            'ar_transaction_line_id' => Yii::t('app', 'Ar Transaction Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'supply_source' => Yii::t('app', 'Supply Source'),
            'destination_type' => Yii::t('app', 'Destination Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'kit_cb' => Yii::t('app', 'Kit Cb'),
            'kit_configured_cb' => Yii::t('app', 'Kit Configured Cb'),
            'bom_config_header_id' => Yii::t('app', 'Bom Config Header ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'so_status' => Yii::t('app', 'So Status'),
            'sys_spd_header_id' => Yii::t('app', 'Sys Spd Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
