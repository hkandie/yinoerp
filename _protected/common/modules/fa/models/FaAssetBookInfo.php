<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_book_info}}".
 *
 * @property string $fa_asset_book_info_id
 * @property integer $fa_asset_book_id
 * @property integer $fa_asset_id
 * @property string $referece
 * @property string $original_cost
 * @property string $current_cost
 * @property string $description
 * @property string $ytd_depreciation
 * @property string $accumulated_depreciation
 * @property string $salvage_value_type
 * @property string $salvage_value_amount
 * @property string $salvage_value_percentage
 * @property integer $fa_depreciation_method_id
 * @property integer $life_months
 * @property integer $depriciation_cb
 * @property string $date_in_service
 * @property string $depriciation_start_date
 * @property string $depriciation_limit_amount
 * @property string $depriciation_limit_percentage
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetBookInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_book_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_book_id', 'fa_asset_id', 'original_cost', 'fa_depreciation_method_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_book_id', 'fa_asset_id', 'fa_depreciation_method_id', 'life_months', 'depriciation_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['original_cost', 'current_cost', 'ytd_depreciation', 'accumulated_depreciation', 'salvage_value_amount', 'salvage_value_percentage', 'depriciation_limit_amount', 'depriciation_limit_percentage'], 'number'],
            [['date_in_service', 'depriciation_start_date', 'creation_date', 'last_update_date'], 'safe'],
            [['referece'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['salvage_value_type'], 'string', 'max' => 20],
            [['fa_asset_book_id', 'fa_asset_id'], 'unique', 'targetAttribute' => ['fa_asset_book_id', 'fa_asset_id'], 'message' => 'The combination of Fa Asset Book ID and Fa Asset ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_book_info_id' => Yii::t('app', 'Fa Asset Book Info ID'),
            'fa_asset_book_id' => Yii::t('app', 'Fa Asset Book ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'referece' => Yii::t('app', 'Referece'),
            'original_cost' => Yii::t('app', 'Original Cost'),
            'current_cost' => Yii::t('app', 'Current Cost'),
            'description' => Yii::t('app', 'Description'),
            'ytd_depreciation' => Yii::t('app', 'Ytd Depreciation'),
            'accumulated_depreciation' => Yii::t('app', 'Accumulated Depreciation'),
            'salvage_value_type' => Yii::t('app', 'Salvage Value Type'),
            'salvage_value_amount' => Yii::t('app', 'Salvage Value Amount'),
            'salvage_value_percentage' => Yii::t('app', 'Salvage Value Percentage'),
            'fa_depreciation_method_id' => Yii::t('app', 'Fa Depreciation Method ID'),
            'life_months' => Yii::t('app', 'Life Months'),
            'depriciation_cb' => Yii::t('app', 'Depriciation Cb'),
            'date_in_service' => Yii::t('app', 'Date In Service'),
            'depriciation_start_date' => Yii::t('app', 'Depriciation Start Date'),
            'depriciation_limit_amount' => Yii::t('app', 'Depriciation Limit Amount'),
            'depriciation_limit_percentage' => Yii::t('app', 'Depriciation Limit Percentage'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
