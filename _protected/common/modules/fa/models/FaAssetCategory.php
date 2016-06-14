<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_category}}".
 *
 * @property string $fa_asset_category_id
 * @property string $asset_category
 * @property string $segment1
 * @property string $segment2
 * @property string $segment3
 * @property string $type
 * @property string $description
 * @property integer $enabled_cb
 * @property integer $capitalize_cb
 * @property integer $in_physical_inv_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled_cb', 'capitalize_cb', 'in_physical_inv_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['asset_category', 'type'], 'string', 'max' => 25],
            [['segment1', 'segment2', 'segment3'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['type'], 'unique'],
            [['type'], 'unique'],
            [['type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_category_id' => Yii::t('app', 'Fa Asset Category ID'),
            'asset_category' => Yii::t('app', 'Asset Category'),
            'segment1' => Yii::t('app', 'Segment1'),
            'segment2' => Yii::t('app', 'Segment2'),
            'segment3' => Yii::t('app', 'Segment3'),
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'capitalize_cb' => Yii::t('app', 'Capitalize Cb'),
            'in_physical_inv_cb' => Yii::t('app', 'In Physical Inv Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
