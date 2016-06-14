<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_demand_v}}".
 *
 * @property string $plan_name
 * @property integer $org_id
 * @property integer $planning_horizon_days
 * @property string $org
 * @property string $forecast
 * @property string $forecast_description
 * @property integer $fp_kanban_demand_id
 * @property integer $plan_id
 * @property integer $item_id_m
 * @property string $quantity
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $demand_type
 * @property string $source
 * @property string $item_number
 * @property string $item_description
 * @property string $top_level_item_number
 * @property string $top_level_item_description
 * @property string $demand_item_number
 * @property string $demand_item_description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class FpKanbanDemandV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_demand_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'planning_horizon_days', 'fp_kanban_demand_id', 'plan_id', 'item_id_m', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'created_by', 'last_update_by'], 'integer'],
            [['plan_id', 'item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['quantity'], 'number'],
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
            'forecast' => Yii::t('app', 'Forecast'),
            'forecast_description' => Yii::t('app', 'Forecast Description'),
            'fp_kanban_demand_id' => Yii::t('app', 'Fp Kanban Demand ID'),
            'plan_id' => Yii::t('app', 'Plan ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'quantity' => Yii::t('app', 'Quantity'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'demand_type' => Yii::t('app', 'Demand Type'),
            'source' => Yii::t('app', 'Source'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'top_level_item_number' => Yii::t('app', 'Top Level Item Number'),
            'top_level_item_description' => Yii::t('app', 'Top Level Item Description'),
            'demand_item_number' => Yii::t('app', 'Demand Item Number'),
            'demand_item_description' => Yii::t('app', 'Demand Item Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
