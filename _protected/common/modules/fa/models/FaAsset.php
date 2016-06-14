<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset}}".
 *
 * @property string $fa_asset_id
 * @property string $asset_number
 * @property string $type
 * @property string $tag_number
 * @property string $serial_number
 * @property string $key_number
 * @property string $description
 * @property string $status
 * @property integer $fa_asset_category_id
 * @property string $units
 * @property integer $parent_asset_id
 * @property string $manufacturer
 * @property integer $ap_supplier_id
 * @property integer $ap_supplier_site_id
 * @property string $model_number
 * @property string $warrranty_number
 * @property string $lease_number
 * @property integer $physical_inventory_cb
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAsset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asset_number', 'type', 'fa_asset_category_id', 'units', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_category_id', 'parent_asset_id', 'ap_supplier_id', 'ap_supplier_site_id', 'physical_inventory_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['units'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['asset_number', 'serial_number', 'key_number', 'manufacturer', 'model_number', 'warrranty_number', 'lease_number'], 'string', 'max' => 30],
            [['type', 'status'], 'string', 'max' => 25],
            [['tag_number'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['rev_enabled'], 'string', 'max' => 20],
            [['asset_number'], 'unique'],
            [['tag_number'], 'unique'],
            [['asset_number', 'serial_number'], 'unique', 'targetAttribute' => ['asset_number', 'serial_number'], 'message' => 'The combination of Asset Number and Serial Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'asset_number' => Yii::t('app', 'Asset Number'),
            'type' => Yii::t('app', 'Type'),
            'tag_number' => Yii::t('app', 'Tag Number'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'key_number' => Yii::t('app', 'Key Number'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'fa_asset_category_id' => Yii::t('app', 'Fa Asset Category ID'),
            'units' => Yii::t('app', 'Units'),
            'parent_asset_id' => Yii::t('app', 'Parent Asset ID'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'ap_supplier_id' => Yii::t('app', 'Ap Supplier ID'),
            'ap_supplier_site_id' => Yii::t('app', 'Ap Supplier Site ID'),
            'model_number' => Yii::t('app', 'Model Number'),
            'warrranty_number' => Yii::t('app', 'Warrranty Number'),
            'lease_number' => Yii::t('app', 'Lease Number'),
            'physical_inventory_cb' => Yii::t('app', 'Physical Inventory Cb'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
