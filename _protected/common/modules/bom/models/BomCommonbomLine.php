<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_commonbom_line}}".
 *
 * @property integer $bom_commonbom_line_id
 * @property string $bom_header_id
 * @property string $bom_line_id
 * @property integer $routing_sequence
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
 * @property integer $company_id
 */
class BomCommonbomLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_commonbom_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_header_id', 'bom_line_id', 'created_by', 'last_update_by'], 'required'],
            [['bom_header_id', 'bom_line_id', 'routing_sequence', 'include_in_cost_rollup_cb', 'supply_sub_inventory', 'supply_locator', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['planning_percentage', 'yield'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['wip_supply_type'], 'string', 'max' => 20],
            [['bom_header_id', 'bom_line_id'], 'unique', 'targetAttribute' => ['bom_header_id', 'bom_line_id'], 'message' => 'The combination of Bom Header ID and Bom Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_commonbom_line_id' => Yii::t('app', 'Bom Commonbom Line ID'),
            'bom_header_id' => Yii::t('app', 'Bom Header ID'),
            'bom_line_id' => Yii::t('app', 'Bom Line ID'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
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
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
