<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_component}}".
 *
 * @property string $fa_asset_component_id
 * @property integer $fa_asset_id
 * @property integer $component_asset_id
 * @property string $source_type
 * @property string $component_type
 * @property integer $line_number
 * @property string $description
 * @property string $reference1
 * @property string $reference2
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetComponent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_component}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_id', 'component_asset_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_id', 'component_asset_id', 'line_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['source_type'], 'string', 'max' => 15],
            [['component_type'], 'string', 'max' => 25],
            [['description', 'reference1', 'reference2'], 'string', 'max' => 255],
            [['fa_asset_id', 'reference2'], 'unique', 'targetAttribute' => ['fa_asset_id', 'reference2'], 'message' => 'The combination of Fa Asset ID and Reference2 has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_component_id' => Yii::t('app', 'Fa Asset Component ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'component_asset_id' => Yii::t('app', 'Component Asset ID'),
            'source_type' => Yii::t('app', 'Source Type'),
            'component_type' => Yii::t('app', 'Component Type'),
            'line_number' => Yii::t('app', 'Line Number'),
            'description' => Yii::t('app', 'Description'),
            'reference1' => Yii::t('app', 'Reference1'),
            'reference2' => Yii::t('app', 'Reference2'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
