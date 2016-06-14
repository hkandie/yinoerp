<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_delivery_header}}".
 *
 * @property integer $sd_delivery_header_id
 * @property string $delivery_number
 * @property string $comment
 * @property integer $shipping_org_id
 * @property integer $transaction_type_id
 * @property string $delivery_date
 * @property string $status
 * @property string $received_by
 * @property string $carrier
 * @property string $vehicle_number
 * @property string $delivery_received_by
 * @property string $carrier_receipt_number
 * @property string $expetced_delivery_date
 * @property string $actual_delivery_date
 * @property string $handling_instruction
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdDeliveryHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_delivery_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shipping_org_id', 'subinventory_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['shipping_org_id', 'transaction_type_id', 'subinventory_id', 'locator_id', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['delivery_date', 'expetced_delivery_date', 'actual_delivery_date', 'creation_date', 'last_update_date'], 'safe'],
            [['delivery_number', 'status'], 'string', 'max' => 25],
            [['comment', 'received_by', 'carrier', 'vehicle_number', 'delivery_received_by', 'carrier_receipt_number', 'handling_instruction'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_delivery_header_id' => Yii::t('app', 'Sd Delivery Header ID'),
            'delivery_number' => Yii::t('app', 'Delivery Number'),
            'comment' => Yii::t('app', 'Comment'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'delivery_date' => Yii::t('app', 'Delivery Date'),
            'status' => Yii::t('app', 'Status'),
            'received_by' => Yii::t('app', 'Received By'),
            'carrier' => Yii::t('app', 'Carrier'),
            'vehicle_number' => Yii::t('app', 'Vehicle Number'),
            'delivery_received_by' => Yii::t('app', 'Delivery Received By'),
            'carrier_receipt_number' => Yii::t('app', 'Carrier Receipt Number'),
            'expetced_delivery_date' => Yii::t('app', 'Expetced Delivery Date'),
            'actual_delivery_date' => Yii::t('app', 'Actual Delivery Date'),
            'handling_instruction' => Yii::t('app', 'Handling Instruction'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
