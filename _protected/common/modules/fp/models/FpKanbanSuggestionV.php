<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_suggestion_v}}".
 *
 * @property string $plan_name
 * @property integer $org_id
 * @property integer $planning_horizon_days
 * @property string $org
 * @property integer $item_id_m
 * @property string $item_number
 * @property string $total_demand
 * @property string $avg_daily_demand
 * @property integer $saftey_stock_quantity
 * @property string $lead_time
 * @property integer $saftey_stock_days
 * @property string $minimum_quantity
 * @property integer $fix_days_supply
 * @property string $maximum_quantity
 * @property string $multibin_fix_days_supply
 * @property string $kanban_multibin_number
 * @property string $kanban_multibin_size
 * @property string $kanban_twobin_size
 * @property string $forecast
 * @property string $forecast_description
 * @property integer $fp_kanban_demand_id
 * @property integer $plan_id
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $demand_type
 * @property string $source
 * @property string $item_description
 * @property string $top_level_item_number
 * @property string $top_level_item_description
 * @property string $demand_item_number
 * @property string $demand_item_description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $fp_kanban_header_id
 */
class FpKanbanSuggestionV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_suggestion_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'planning_horizon_days', 'item_id_m', 'saftey_stock_quantity', 'lead_time', 'saftey_stock_days', 'fix_days_supply', 'multibin_fix_days_supply', 'fp_kanban_demand_id', 'plan_id', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'created_by', 'last_update_by', 'fp_kanban_header_id'], 'integer'],
            [['item_id_m', 'plan_id', 'created_by', 'last_update_by'], 'required'],
            [['total_demand', 'avg_daily_demand', 'minimum_quantity', 'maximum_quantity', 'kanban_multibin_number', 'kanban_multibin_size', 'kanban_twobin_size'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['plan_name', 'forecast', 'demand_type', 'source'], 'string', 'max' => 25],
            [['org', 'item_number', 'top_level_item_number', 'demand_item_number'], 'string', 'max' => 50],
            [['forecast_description', 'item_description', 'top_level_item_description', 'demand_item_description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'plan_name' => Yii::t('app', 'Plan Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'planning_horizon_days' => Yii::t('app', 'Planning Horizon Days'),
            'org' => Yii::t('app', 'Org'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_number' => Yii::t('app', 'Item Number'),
            'total_demand' => Yii::t('app', 'Total Demand'),
            'avg_daily_demand' => Yii::t('app', 'Avg Daily Demand'),
            'saftey_stock_quantity' => Yii::t('app', 'Saftey Stock Quantity'),
            'lead_time' => Yii::t('app', 'Lead Time'),
            'saftey_stock_days' => Yii::t('app', 'Saftey Stock Days'),
            'minimum_quantity' => Yii::t('app', 'Minimum Quantity'),
            'fix_days_supply' => Yii::t('app', 'Fix Days Supply'),
            'maximum_quantity' => Yii::t('app', 'Maximum Quantity'),
            'multibin_fix_days_supply' => Yii::t('app', 'Multibin Fix Days Supply'),
            'kanban_multibin_number' => Yii::t('app', 'Kanban Multibin Number'),
            'kanban_multibin_size' => Yii::t('app', 'Kanban Multibin Size'),
            'kanban_twobin_size' => Yii::t('app', 'Kanban Twobin Size'),
            'forecast' => Yii::t('app', 'Forecast'),
            'forecast_description' => Yii::t('app', 'Forecast Description'),
            'fp_kanban_demand_id' => Yii::t('app', 'Fp Kanban Demand ID'),
            'plan_id' => Yii::t('app', 'Plan ID'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'demand_type' => Yii::t('app', 'Demand Type'),
            'source' => Yii::t('app', 'Source'),
            'item_description' => Yii::t('app', 'Item Description'),
            'top_level_item_number' => Yii::t('app', 'Top Level Item Number'),
            'top_level_item_description' => Yii::t('app', 'Top Level Item Description'),
            'demand_item_number' => Yii::t('app', 'Demand Item Number'),
            'demand_item_description' => Yii::t('app', 'Demand Item Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'fp_kanban_header_id' => Yii::t('app', 'Fp Kanban Header ID'),
        ];
    }
}
