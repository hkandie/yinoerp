<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_asset".
 *
 * @property string $am_asset_id
 * @property string $asset_number
 * @property string $type
 * @property string $tag_number
 * @property string $serial_number
 * @property integer $owning_department_id
 * @property integer $owning_employee_id
 * @property string $description
 * @property string $status
 * @property integer $am_asset_category_id
 * @property integer $wip_accounting_group_id
 * @property integer $parent_asset_id
 * @property string $manufacturer
 * @property integer $org_id
 * @property integer $item_id_m
 * @property string $model_number
 * @property string $warranty_number
 * @property string $warranty_exp_date
 * @property integer $maintainable_cb
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property integer $equipment_item_id_m
 * @property integer $address_id
 * @property integer $fa_asset_id
 * @property integer $production_org_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmAsset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_asset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asset_number', 'type', 'am_asset_category_id', 'created_by', 'last_update_by'], 'required'],
            [['owning_department_id', 'owning_employee_id', 'am_asset_category_id', 'wip_accounting_group_id', 'parent_asset_id', 'org_id', 'item_id_m', 'maintainable_cb', 'subinventory_id', 'locator_id', 'equipment_item_id_m', 'address_id', 'fa_asset_id', 'production_org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['warranty_exp_date', 'creation_date', 'last_update_date'], 'safe'],
            [['asset_number', 'tag_number'], 'string', 'max' => 50],
            [['type', 'status'], 'string', 'max' => 25],
            [['serial_number', 'manufacturer', 'model_number', 'warranty_number'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 256],
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
            'am_asset_id' => Yii::t('app', 'Am Asset ID'),
            'asset_number' => Yii::t('app', 'Asset Number'),
            'type' => Yii::t('app', 'Type'),
            'tag_number' => Yii::t('app', 'Tag Number'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'owning_department_id' => Yii::t('app', 'Owning Department ID'),
            'owning_employee_id' => Yii::t('app', 'Owning Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'am_asset_category_id' => Yii::t('app', 'Am Asset Category ID'),
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'parent_asset_id' => Yii::t('app', 'Parent Asset ID'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'model_number' => Yii::t('app', 'Model Number'),
            'warranty_number' => Yii::t('app', 'Warranty Number'),
            'warranty_exp_date' => Yii::t('app', 'Warranty Exp Date'),
            'maintainable_cb' => Yii::t('app', 'Maintainable Cb'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'equipment_item_id_m' => Yii::t('app', 'Equipment Item Id M'),
            'address_id' => Yii::t('app', 'Address ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'production_org_id' => Yii::t('app', 'Production Org ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
