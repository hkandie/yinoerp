<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_line_v}}".
 *
 * @property integer $bom_header_id_h
 * @property integer $item_id_m
 * @property integer $org_id
 * @property string $alternate_bom
 * @property string $effective_date
 * @property integer $common_bom_item_id_m
 * @property integer $common_bom_org_id
 * @property integer $h_created_by
 * @property string $h_creation_date
 * @property integer $h_last_update_by
 * @property string $h_last_update_date
 * @property string $bom_header_id
 * @property integer $bom_line_id
 * @property string $bom_sequence
 * @property integer $routing_sequence
 * @property integer $component_item_id_m
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
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class BomLineV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_line_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_header_id_h', 'item_id_m', 'org_id', 'common_bom_item_id_m', 'common_bom_org_id', 'h_created_by', 'h_last_update_by', 'bom_header_id', 'bom_line_id', 'bom_sequence', 'routing_sequence', 'component_item_id_m', 'auto_request_material_cb', 'eco_implemented_cb', 'include_in_cost_rollup_cb', 'supply_sub_inventory', 'supply_locator', 'created_by', 'last_update_by'], 'integer'],
            [['effective_date', 'h_creation_date', 'h_last_update_date', 'effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['usage_quantity', 'planning_percentage', 'yield'], 'number'],
            [['alternate_bom', 'usage_basis', 'eco_number'], 'string', 'max' => 50],
            [['wip_supply_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_header_id_h' => Yii::t('app', 'Bom Header Id H'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'org_id' => Yii::t('app', 'Org ID'),
            'alternate_bom' => Yii::t('app', 'Alternate Bom'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'common_bom_item_id_m' => Yii::t('app', 'Common Bom Item Id M'),
            'common_bom_org_id' => Yii::t('app', 'Common Bom Org ID'),
            'h_created_by' => Yii::t('app', 'H Created By'),
            'h_creation_date' => Yii::t('app', 'H Creation Date'),
            'h_last_update_by' => Yii::t('app', 'H Last Update By'),
            'h_last_update_date' => Yii::t('app', 'H Last Update Date'),
            'bom_header_id' => Yii::t('app', 'Bom Header ID'),
            'bom_line_id' => Yii::t('app', 'Bom Line ID'),
            'bom_sequence' => Yii::t('app', 'Bom Sequence'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'component_item_id_m' => Yii::t('app', 'Component Item Id M'),
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
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
