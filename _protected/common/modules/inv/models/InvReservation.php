<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_reservation}}".
 *
 * @property integer $inv_reservation_id
 * @property integer $item_id_m
 * @property integer $org_id
 * @property string $status
 * @property string $demand_type
 * @property string $sd_so_header_id
 * @property string $sd_so_line_id
 * @property string $d_reference_key_name
 * @property integer $d_reference_key_value
 * @property string $demand_comment
 * @property string $need_by_date
 * @property integer $uom_id
 * @property string $demand_quantity
 * @property string $supply_type
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $s_reference_key_name
 * @property integer $s_reference_key_value
 * @property integer $onhand_id
 * @property string $supply_comment
 * @property integer $inv_serial_number_id
 * @property integer $inv_lot_number_id
 * @property string $reason
 * @property string $reservation_type
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvReservation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_reservation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'd_reference_key_name', 'd_reference_key_value', 's_reference_key_name', 's_reference_key_value', 'created_by', 'creation_date'], 'required'],
            [['item_id_m', 'org_id', 'd_reference_key_value', 'uom_id', 'subinventory_id', 'locator_id', 's_reference_key_value', 'onhand_id', 'inv_serial_number_id', 'inv_lot_number_id', 'reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['need_by_date', 'creation_date', 'last_update_date'], 'safe'],
            [['demand_quantity'], 'number'],
            [['status', 'demand_type', 'supply_type', 'reason'], 'string', 'max' => 25],
            [['sd_so_header_id', 'description'], 'string', 'max' => 256],
            [['sd_so_line_id'], 'string', 'max' => 10],
            [['d_reference_key_name', 's_reference_key_name', 'reservation_type', 'reference_key_name'], 'string', 'max' => 50],
            [['demand_comment', 'supply_comment'], 'string', 'max' => 255],
            [['d_reference_key_name', 'd_reference_key_value', 's_reference_key_name', 's_reference_key_value', 'inv_serial_number_id'], 'unique', 'targetAttribute' => ['d_reference_key_name', 'd_reference_key_value', 's_reference_key_name', 's_reference_key_value', 'inv_serial_number_id'], 'message' => 'The combination of D Reference Key Name, D Reference Key Value, S Reference Key Name, S Reference Key Value and Inv Serial Number ID has already been taken.'],
            [['sd_so_line_id', 'inv_serial_number_id'], 'unique', 'targetAttribute' => ['sd_so_line_id', 'inv_serial_number_id'], 'message' => 'The combination of Sd So Line ID and Inv Serial Number ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_reservation_id' => Yii::t('app', 'Inv Reservation ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'demand_type' => Yii::t('app', 'Demand Type'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'd_reference_key_name' => Yii::t('app', 'D Reference Key Name'),
            'd_reference_key_value' => Yii::t('app', 'D Reference Key Value'),
            'demand_comment' => Yii::t('app', 'Demand Comment'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'demand_quantity' => Yii::t('app', 'Demand Quantity'),
            'supply_type' => Yii::t('app', 'Supply Type'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            's_reference_key_name' => Yii::t('app', 'S Reference Key Name'),
            's_reference_key_value' => Yii::t('app', 'S Reference Key Value'),
            'onhand_id' => Yii::t('app', 'Onhand ID'),
            'supply_comment' => Yii::t('app', 'Supply Comment'),
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'inv_lot_number_id' => Yii::t('app', 'Inv Lot Number ID'),
            'reason' => Yii::t('app', 'Reason'),
            'reservation_type' => Yii::t('app', 'Reservation Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
