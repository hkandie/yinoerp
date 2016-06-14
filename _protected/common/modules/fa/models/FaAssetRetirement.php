<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_retirement}}".
 *
 * @property string $fa_asset_retirement_id
 * @property integer $fa_asset_id
 * @property integer $fa_asset_book_id
 * @property string $source_type
 * @property string $reference
 * @property string $status
 * @property string $description
 * @property string $retired_units
 * @property string $retired_cost
 * @property string $proceed_of_sales
 * @property integer $gl_journal_header_id
 * @property string $cost_of_removals
 * @property string $retirement_convention
 * @property string $adjustment_amount
 * @property string $retire_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetRetirement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_retirement}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_id', 'fa_asset_book_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_id', 'fa_asset_book_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['retired_units', 'retired_cost', 'proceed_of_sales', 'cost_of_removals', 'adjustment_amount'], 'number'],
            [['retire_date', 'creation_date', 'last_update_date'], 'safe'],
            [['source_type', 'reference', 'description'], 'string', 'max' => 255],
            [['status', 'retirement_convention'], 'string', 'max' => 25],
            [['fa_asset_id', 'retired_cost'], 'unique', 'targetAttribute' => ['fa_asset_id', 'retired_cost'], 'message' => 'The combination of Fa Asset ID and Retired Cost has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_retirement_id' => Yii::t('app', 'Fa Asset Retirement ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'fa_asset_book_id' => Yii::t('app', 'Fa Asset Book ID'),
            'source_type' => Yii::t('app', 'Source Type'),
            'reference' => Yii::t('app', 'Reference'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'retired_units' => Yii::t('app', 'Retired Units'),
            'retired_cost' => Yii::t('app', 'Retired Cost'),
            'proceed_of_sales' => Yii::t('app', 'Proceed Of Sales'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'cost_of_removals' => Yii::t('app', 'Cost Of Removals'),
            'retirement_convention' => Yii::t('app', 'Retirement Convention'),
            'adjustment_amount' => Yii::t('app', 'Adjustment Amount'),
            'retire_date' => Yii::t('app', 'Retire Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
