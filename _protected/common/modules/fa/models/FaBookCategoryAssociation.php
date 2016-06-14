<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_book_category_association}}".
 *
 * @property string $fa_book_category_association_id
 * @property integer $fa_asset_category_id
 * @property integer $fa_asset_book_id
 * @property integer $asset_cost_ac_id
 * @property integer $asset_clearing_ac_id
 * @property integer $depreciation_expense_ac_id
 * @property integer $accumulated_depreciation_ac_id
 * @property integer $description
 * @property integer $bonus_expense_ac_id
 * @property integer $bonus_reserve_ac_id
 * @property integer $revalue_reserve_ac_id
 * @property integer $cip_cost_ac_id
 * @property integer $cip_clearing_ac_id
 * @property integer $unplanned_depreciation_expense_ac_id
 * @property integer $retirement_gl_ac_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaBookCategoryAssociation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_book_category_association}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_category_id', 'fa_asset_book_id', 'asset_cost_ac_id', 'asset_clearing_ac_id', 'depreciation_expense_ac_id', 'accumulated_depreciation_ac_id', 'description', 'bonus_expense_ac_id', 'bonus_reserve_ac_id', 'revalue_reserve_ac_id', 'cip_cost_ac_id', 'cip_clearing_ac_id', 'unplanned_depreciation_expense_ac_id', 'retirement_gl_ac_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['unplanned_depreciation_expense_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['fa_asset_category_id', 'fa_asset_book_id'], 'unique', 'targetAttribute' => ['fa_asset_category_id', 'fa_asset_book_id'], 'message' => 'The combination of Fa Asset Category ID and Fa Asset Book ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_book_category_association_id' => Yii::t('app', 'Fa Book Category Association ID'),
            'fa_asset_category_id' => Yii::t('app', 'Fa Asset Category ID'),
            'fa_asset_book_id' => Yii::t('app', 'Fa Asset Book ID'),
            'asset_cost_ac_id' => Yii::t('app', 'Asset Cost Ac ID'),
            'asset_clearing_ac_id' => Yii::t('app', 'Asset Clearing Ac ID'),
            'depreciation_expense_ac_id' => Yii::t('app', 'Depreciation Expense Ac ID'),
            'accumulated_depreciation_ac_id' => Yii::t('app', 'Accumulated Depreciation Ac ID'),
            'description' => Yii::t('app', 'Description'),
            'bonus_expense_ac_id' => Yii::t('app', 'Bonus Expense Ac ID'),
            'bonus_reserve_ac_id' => Yii::t('app', 'Bonus Reserve Ac ID'),
            'revalue_reserve_ac_id' => Yii::t('app', 'Revalue Reserve Ac ID'),
            'cip_cost_ac_id' => Yii::t('app', 'Cip Cost Ac ID'),
            'cip_clearing_ac_id' => Yii::t('app', 'Cip Clearing Ac ID'),
            'unplanned_depreciation_expense_ac_id' => Yii::t('app', 'Unplanned Depreciation Expense Ac ID'),
            'retirement_gl_ac_id' => Yii::t('app', 'Retirement Gl Ac ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
