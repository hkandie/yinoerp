<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_demand}}".
 *
 * @property integer $fp_kanban_demand_id
 * @property integer $plan_id
 * @property integer $item_id_m
 * @property string $quantity
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $demand_type
 * @property string $source
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpKanbanDemand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_demand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plan_id', 'item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['plan_id', 'item_id_m', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['demand_type', 'source'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_kanban_demand_id' => Yii::t('app', 'Fp Kanban Demand ID'),
            'plan_id' => Yii::t('app', 'Plan ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'quantity' => Yii::t('app', 'Quantity'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'demand_type' => Yii::t('app', 'Demand Type'),
            'source' => Yii::t('app', 'Source'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
