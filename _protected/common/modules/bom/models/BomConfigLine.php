<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_config_line}}".
 *
 * @property integer $bom_config_line_id
 * @property string $bom_config_header_id
 * @property string $bom_sequence
 * @property integer $routing_sequence
 * @property integer $component_item_id_m
 * @property string $component_revision
 * @property string $usage_basis
 * @property string $usage_quantity
 * @property string $line_quantity
 * @property string $transacted_quantity
 * @property integer $auto_request_material_cb
 * @property string $planning_percentage
 * @property string $yield
 * @property string $wip_supply_type
 * @property integer $supply_sub_inventory
 * @property integer $supply_locator
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomConfigLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_config_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_config_header_id', 'bom_sequence', 'component_item_id_m', 'line_quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bom_config_header_id', 'bom_sequence', 'routing_sequence', 'component_item_id_m', 'auto_request_material_cb', 'supply_sub_inventory', 'supply_locator', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['usage_quantity', 'line_quantity', 'transacted_quantity', 'planning_percentage', 'yield'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['component_revision'], 'string', 'max' => 10],
            [['usage_basis'], 'string', 'max' => 50],
            [['wip_supply_type'], 'string', 'max' => 20],
            [['bom_config_header_id', 'bom_sequence'], 'unique', 'targetAttribute' => ['bom_config_header_id', 'bom_sequence'], 'message' => 'The combination of Bom Config Header ID and Bom Sequence has already been taken.'],
            [['bom_config_header_id', 'routing_sequence', 'component_item_id_m'], 'unique', 'targetAttribute' => ['bom_config_header_id', 'routing_sequence', 'component_item_id_m'], 'message' => 'The combination of Bom Config Header ID, Routing Sequence and Component Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_config_line_id' => Yii::t('app', 'Bom Config Line ID'),
            'bom_config_header_id' => Yii::t('app', 'Bom Config Header ID'),
            'bom_sequence' => Yii::t('app', 'Bom Sequence'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'component_item_id_m' => Yii::t('app', 'Component Item Id M'),
            'component_revision' => Yii::t('app', 'Component Revision'),
            'usage_basis' => Yii::t('app', 'Usage Basis'),
            'usage_quantity' => Yii::t('app', 'Usage Quantity'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'transacted_quantity' => Yii::t('app', 'Transacted Quantity'),
            'auto_request_material_cb' => Yii::t('app', 'Auto Request Material Cb'),
            'planning_percentage' => Yii::t('app', 'Planning Percentage'),
            'yield' => Yii::t('app', 'Yield'),
            'wip_supply_type' => Yii::t('app', 'Wip Supply Type'),
            'supply_sub_inventory' => Yii::t('app', 'Supply Sub Inventory'),
            'supply_locator' => Yii::t('app', 'Supply Locator'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
