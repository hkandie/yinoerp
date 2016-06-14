<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_planner_header}}".
 *
 * @property integer $fp_kanban_planner_header_id
 * @property integer $org_id
 * @property string $plan_name
 * @property integer $planning_horizon_days
 * @property string $description
 * @property string $status
 * @property string $demand_source
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpKanbanPlannerHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_planner_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'plan_name', 'planning_horizon_days', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'planning_horizon_days', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['plan_name', 'status', 'demand_source'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'plan_name'], 'unique', 'targetAttribute' => ['org_id', 'plan_name'], 'message' => 'The combination of Org ID and Plan Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_kanban_planner_header_id' => Yii::t('app', 'Fp Kanban Planner Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'plan_name' => Yii::t('app', 'Plan Name'),
            'planning_horizon_days' => Yii::t('app', 'Planning Horizon Days'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'demand_source' => Yii::t('app', 'Demand Source'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
