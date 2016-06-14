<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_serial_number}}".
 *
 * @property integer $inv_serial_number_id
 * @property string $serial_number
 * @property integer $item_id_m
 * @property string $generation
 * @property integer $org_id
 * @property integer $lock_cb
 * @property integer $first_inv_transaction_id
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $origination_type
 * @property string $origination_date
 * @property string $status
 * @property string $activation_date
 * @property integer $current_org_id
 * @property integer $supplier_site_id
 * @property integer $po_header_id
 * @property string $supplier_sn
 * @property string $supplier_ln
 * @property integer $inv_lot_number_id
 * @property integer $current_subinventory_id
 * @property integer $current_locator_id
 * @property string $item_revision
 * @property integer $parent_serial_number_id
 * @property integer $original_wip_wo_header_id
 * @property integer $current_wip_wo_header_id
 * @property integer $last_inv_transaction_id
 * @property string $country_of_origin
 * @property integer $fixed_asset_cb
 * @property string $description
 * @property integer $ar_customer_site_id
 * @property integer $sd_so_line_id
 * @property integer $fa_asset_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvSerialNumber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_serial_number}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['serial_number', 'item_id_m', 'generation', 'org_id', 'origination_type', 'origination_date', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'org_id', 'lock_cb', 'first_inv_transaction_id', 'current_org_id', 'supplier_site_id', 'po_header_id', 'inv_lot_number_id', 'current_subinventory_id', 'current_locator_id', 'parent_serial_number_id', 'original_wip_wo_header_id', 'current_wip_wo_header_id', 'last_inv_transaction_id', 'fixed_asset_cb', 'ar_customer_site_id', 'sd_so_line_id', 'fa_asset_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['origination_date', 'activation_date', 'creation_date', 'last_update_date'], 'safe'],
            [['serial_number', 'reference_key_name', 'supplier_sn', 'supplier_ln'], 'string', 'max' => 50],
            [['generation', 'reference_key_value', 'origination_type', 'status', 'country_of_origin'], 'string', 'max' => 25],
            [['item_revision'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 256],
            [['serial_number', 'item_id_m', 'org_id'], 'unique', 'targetAttribute' => ['serial_number', 'item_id_m', 'org_id'], 'message' => 'The combination of Serial Number, Item Id M and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'generation' => Yii::t('app', 'Generation'),
            'org_id' => Yii::t('app', 'Org ID'),
            'lock_cb' => Yii::t('app', 'Lock Cb'),
            'first_inv_transaction_id' => Yii::t('app', 'First Inv Transaction ID'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'origination_type' => Yii::t('app', 'Origination Type'),
            'origination_date' => Yii::t('app', 'Origination Date'),
            'status' => Yii::t('app', 'Status'),
            'activation_date' => Yii::t('app', 'Activation Date'),
            'current_org_id' => Yii::t('app', 'Current Org ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'supplier_sn' => Yii::t('app', 'Supplier Sn'),
            'supplier_ln' => Yii::t('app', 'Supplier Ln'),
            'inv_lot_number_id' => Yii::t('app', 'Inv Lot Number ID'),
            'current_subinventory_id' => Yii::t('app', 'Current Subinventory ID'),
            'current_locator_id' => Yii::t('app', 'Current Locator ID'),
            'item_revision' => Yii::t('app', 'Item Revision'),
            'parent_serial_number_id' => Yii::t('app', 'Parent Serial Number ID'),
            'original_wip_wo_header_id' => Yii::t('app', 'Original Wip Wo Header ID'),
            'current_wip_wo_header_id' => Yii::t('app', 'Current Wip Wo Header ID'),
            'last_inv_transaction_id' => Yii::t('app', 'Last Inv Transaction ID'),
            'country_of_origin' => Yii::t('app', 'Country Of Origin'),
            'fixed_asset_cb' => Yii::t('app', 'Fixed Asset Cb'),
            'description' => Yii::t('app', 'Description'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
