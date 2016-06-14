<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_depreciation_line}}".
 *
 * @property string $fa_depreciation_line_id
 * @property integer $fa_depreciation_header_id
 * @property integer $asset_id
 * @property string $depreciation_amount
 * @property string $unschedule_amount
 * @property string $total_depreciation_amount
 * @property integer $depreciation_account_id
 * @property string $cost_before_depreciation
 * @property string $nbv_before_depreciation
 * @property string $salvage_value_bd
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaDepreciationLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_depreciation_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_depreciation_header_id', 'total_depreciation_amount', 'depreciation_account_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_depreciation_header_id', 'asset_id', 'depreciation_account_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['depreciation_amount', 'unschedule_amount', 'total_depreciation_amount', 'cost_before_depreciation', 'nbv_before_depreciation', 'salvage_value_bd'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['fa_depreciation_header_id', 'asset_id'], 'unique', 'targetAttribute' => ['fa_depreciation_header_id', 'asset_id'], 'message' => 'The combination of Fa Depreciation Header ID and Asset ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_depreciation_line_id' => Yii::t('app', 'Fa Depreciation Line ID'),
            'fa_depreciation_header_id' => Yii::t('app', 'Fa Depreciation Header ID'),
            'asset_id' => Yii::t('app', 'Asset ID'),
            'depreciation_amount' => Yii::t('app', 'Depreciation Amount'),
            'unschedule_amount' => Yii::t('app', 'Unschedule Amount'),
            'total_depreciation_amount' => Yii::t('app', 'Total Depreciation Amount'),
            'depreciation_account_id' => Yii::t('app', 'Depreciation Account ID'),
            'cost_before_depreciation' => Yii::t('app', 'Cost Before Depreciation'),
            'nbv_before_depreciation' => Yii::t('app', 'Nbv Before Depreciation'),
            'salvage_value_bd' => Yii::t('app', 'Salvage Value Bd'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
