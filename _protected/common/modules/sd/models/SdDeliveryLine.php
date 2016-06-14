<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_delivery_line}}".
 *
 * @property integer $sd_delivery_line_id
 * @property integer $sd_delivery_header_id
 * @property integer $sd_so_header_id
 * @property integer $sd_so_line_id
 * @property integer $shipping_org_id
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $quantity
 * @property string $shipped_quantity
 * @property integer $staging_subinventory_id
 * @property integer $staging_locator_id
 * @property string $delivery_status
 * @property string $picking_date
 * @property string $actual_ship_date
 * @property integer $reference_doc_type
 * @property integer $reference_doc_number
 * @property string $line_uom_id
 * @property integer $volume_uom_id
 * @property string $total_volume
 * @property integer $weight_uom_id
 * @property string $total_weight
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdDeliveryLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_delivery_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_delivery_header_id', 'sd_so_header_id', 'sd_so_line_id', 'shipping_org_id', 'item_id_m', 'staging_subinventory_id', 'staging_locator_id', 'reference_doc_type', 'reference_doc_number', 'volume_uom_id', 'weight_uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['sd_so_header_id', 'sd_so_line_id', 'shipping_org_id', 'staging_subinventory_id', 'delivery_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['quantity', 'shipped_quantity', 'total_volume'], 'number'],
            [['picking_date', 'actual_ship_date', 'total_weight', 'creation_date', 'last_update_date'], 'safe'],
            [['item_description', 'delivery_status', 'line_uom_id'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_delivery_line_id' => Yii::t('app', 'Sd Delivery Line ID'),
            'sd_delivery_header_id' => Yii::t('app', 'Sd Delivery Header ID'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'quantity' => Yii::t('app', 'Quantity'),
            'shipped_quantity' => Yii::t('app', 'Shipped Quantity'),
            'staging_subinventory_id' => Yii::t('app', 'Staging Subinventory ID'),
            'staging_locator_id' => Yii::t('app', 'Staging Locator ID'),
            'delivery_status' => Yii::t('app', 'Delivery Status'),
            'picking_date' => Yii::t('app', 'Picking Date'),
            'actual_ship_date' => Yii::t('app', 'Actual Ship Date'),
            'reference_doc_type' => Yii::t('app', 'Reference Doc Type'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'line_uom_id' => Yii::t('app', 'Line Uom ID'),
            'volume_uom_id' => Yii::t('app', 'Volume Uom ID'),
            'total_volume' => Yii::t('app', 'Total Volume'),
            'weight_uom_id' => Yii::t('app', 'Weight Uom ID'),
            'total_weight' => Yii::t('app', 'Total Weight'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
