<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_line}}".
 *
 * @property integer $bom_line_id
 * @property string $bom_header_id
 * @property string $bom_sequence
 * @property integer $routing_sequence
 * @property integer $component_item_id_m
 * @property string $component_revision
 * @property string $usage_basis
 * @property string $usage_quantity
 * @property integer $auto_request_material_cb
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $eco_number
 * @property integer $eco_implemented_cb
 * @property string $planning_percentage
 * @property string $yield
 * @property integer $include_in_cost_rollup_cb
 * @property string $wip_supply_type
 * @property integer $supply_sub_inventory
 * @property integer $supply_locator
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_header_id', 'bom_sequence', 'component_item_id_m', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bom_header_id', 'bom_sequence', 'routing_sequence', 'component_item_id_m', 'auto_request_material_cb', 'eco_implemented_cb', 'include_in_cost_rollup_cb', 'supply_sub_inventory', 'supply_locator', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['usage_quantity', 'planning_percentage', 'yield'], 'number'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['component_revision'], 'string', 'max' => 10],
            [['usage_basis', 'eco_number'], 'string', 'max' => 50],
            [['wip_supply_type'], 'string', 'max' => 20],
            [['bom_header_id', 'bom_sequence'], 'unique', 'targetAttribute' => ['bom_header_id', 'bom_sequence'], 'message' => 'The combination of Bom Header ID and Bom Sequence has already been taken.'],
            [['bom_header_id', 'routing_sequence', 'component_item_id_m'], 'unique', 'targetAttribute' => ['bom_header_id', 'routing_sequence', 'component_item_id_m'], 'message' => 'The combination of Bom Header ID, Routing Sequence and Component Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_line_id' => Yii::t('app', 'Bom Line ID'),
            'bom_header_id' => Yii::t('app', 'Bom Header ID'),
            'bom_sequence' => Yii::t('app', 'Bom Sequence'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'component_item_id_m' => Yii::t('app', 'Component Item Id M'),
            'component_revision' => Yii::t('app', 'Component Revision'),
            'usage_basis' => Yii::t('app', 'Usage Basis'),
            'usage_quantity' => Yii::t('app', 'Usage Quantity'),
            'auto_request_material_cb' => Yii::t('app', 'Auto Request Material Cb'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'eco_number' => Yii::t('app', 'Eco Number'),
            'eco_implemented_cb' => Yii::t('app', 'Eco Implemented Cb'),
            'planning_percentage' => Yii::t('app', 'Planning Percentage'),
            'yield' => Yii::t('app', 'Yield'),
            'include_in_cost_rollup_cb' => Yii::t('app', 'Include In Cost Rollup Cb'),
            'wip_supply_type' => Yii::t('app', 'Wip Supply Type'),
            'supply_sub_inventory' => Yii::t('app', 'Supply Sub Inventory'),
            'supply_locator' => Yii::t('app', 'Supply Locator'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
