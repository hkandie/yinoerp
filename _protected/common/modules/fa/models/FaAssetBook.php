<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_book}}".
 *
 * @property string $fa_asset_book_id
 * @property string $asset_book_name
 * @property integer $bu_org_id
 * @property string $type
 * @property integer $primary_fa_asset_book_id
 * @property string $description
 * @property string $inactive_on
 * @property integer $ledger_id
 * @property integer $gl_calendar_id
 * @property integer $allow_gl_posting_cb
 * @property string $fa_calendar_code
 * @property integer $revalue_accum_depriciation_cb
 * @property integer $retire_revaluation_reserve_cb
 * @property integer $revalue_ytd_depriciation_cb
 * @property integer $sale_proceeds_gain_id
 * @property integer $sale_proceeds_loss_id
 * @property integer $sale_proceeds_clearing_id
 * @property integer $removal_cost_gain_id
 * @property integer $removal_cost_loss_id
 * @property integer $removal_cost_clearing_id
 * @property integer $nbv_retired_gain_id
 * @property integer $nbv_retired_loss_id
 * @property integer $reval_reserve_retired_gain_id
 * @property string $status
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $reval_reserve_retired_loss_id
 * @property integer $deff_depriciation_reserve_id
 * @property integer $deff_depriciation_expense_id
 * @property integer $deff_depriciation_adjustment_id
 * @property integer $default_ac_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_book}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asset_book_name', 'bu_org_id', 'type', 'revalue_ytd_depriciation_cb', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'primary_fa_asset_book_id', 'ledger_id', 'gl_calendar_id', 'allow_gl_posting_cb', 'revalue_accum_depriciation_cb', 'retire_revaluation_reserve_cb', 'revalue_ytd_depriciation_cb', 'sale_proceeds_gain_id', 'sale_proceeds_loss_id', 'sale_proceeds_clearing_id', 'removal_cost_gain_id', 'removal_cost_loss_id', 'removal_cost_clearing_id', 'nbv_retired_gain_id', 'nbv_retired_loss_id', 'reval_reserve_retired_gain_id', 'rev_number', 'reval_reserve_retired_loss_id', 'deff_depriciation_reserve_id', 'deff_depriciation_expense_id', 'deff_depriciation_adjustment_id', 'default_ac_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['inactive_on', 'creation_date', 'last_update_date'], 'safe'],
            [['asset_book_name', 'type', 'fa_calendar_code'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 200],
            [['status', 'rev_enabled'], 'string', 'max' => 20],
            [['asset_book_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_book_id' => Yii::t('app', 'Fa Asset Book ID'),
            'asset_book_name' => Yii::t('app', 'Asset Book Name'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'type' => Yii::t('app', 'Type'),
            'primary_fa_asset_book_id' => Yii::t('app', 'Primary Fa Asset Book ID'),
            'description' => Yii::t('app', 'Description'),
            'inactive_on' => Yii::t('app', 'Inactive On'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'gl_calendar_id' => Yii::t('app', 'Gl Calendar ID'),
            'allow_gl_posting_cb' => Yii::t('app', 'Allow Gl Posting Cb'),
            'fa_calendar_code' => Yii::t('app', 'Fa Calendar Code'),
            'revalue_accum_depriciation_cb' => Yii::t('app', 'Revalue Accum Depriciation Cb'),
            'retire_revaluation_reserve_cb' => Yii::t('app', 'Retire Revaluation Reserve Cb'),
            'revalue_ytd_depriciation_cb' => Yii::t('app', 'Revalue Ytd Depriciation Cb'),
            'sale_proceeds_gain_id' => Yii::t('app', 'Sale Proceeds Gain ID'),
            'sale_proceeds_loss_id' => Yii::t('app', 'Sale Proceeds Loss ID'),
            'sale_proceeds_clearing_id' => Yii::t('app', 'Sale Proceeds Clearing ID'),
            'removal_cost_gain_id' => Yii::t('app', 'Removal Cost Gain ID'),
            'removal_cost_loss_id' => Yii::t('app', 'Removal Cost Loss ID'),
            'removal_cost_clearing_id' => Yii::t('app', 'Removal Cost Clearing ID'),
            'nbv_retired_gain_id' => Yii::t('app', 'Nbv Retired Gain ID'),
            'nbv_retired_loss_id' => Yii::t('app', 'Nbv Retired Loss ID'),
            'reval_reserve_retired_gain_id' => Yii::t('app', 'Reval Reserve Retired Gain ID'),
            'status' => Yii::t('app', 'Status'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'reval_reserve_retired_loss_id' => Yii::t('app', 'Reval Reserve Retired Loss ID'),
            'deff_depriciation_reserve_id' => Yii::t('app', 'Deff Depriciation Reserve ID'),
            'deff_depriciation_expense_id' => Yii::t('app', 'Deff Depriciation Expense ID'),
            'deff_depriciation_adjustment_id' => Yii::t('app', 'Deff Depriciation Adjustment ID'),
            'default_ac_id' => Yii::t('app', 'Default Ac ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
