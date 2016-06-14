<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_formula_line}}".
 *
 * @property string $pm_formula_line_id
 * @property integer $pm_formula_header_id
 * @property integer $line_no
 * @property string $line_type
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property string $quantity
 * @property string $description
 * @property string $cost_allocation
 * @property string $scale_type
 * @property string $yield_type
 * @property string $byproduct_type
 * @property string $consumption_type
 * @property string $phantom_type
 * @property string $required_qty
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmFormulaLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_formula_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_formula_header_id', 'line_no', 'item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['pm_formula_header_id', 'line_no', 'item_id_m', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'cost_allocation', 'required_qty'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['line_type', 'scale_type', 'yield_type', 'byproduct_type', 'consumption_type', 'phantom_type'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 256],
            [['pm_formula_header_id', 'item_id_m'], 'unique', 'targetAttribute' => ['pm_formula_header_id', 'item_id_m'], 'message' => 'The combination of Pm Formula Header ID and Item Id M has already been taken.'],
            [['pm_formula_header_id', 'line_no'], 'unique', 'targetAttribute' => ['pm_formula_header_id', 'line_no'], 'message' => 'The combination of Pm Formula Header ID and Line No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_formula_line_id' => Yii::t('app', 'Pm Formula Line ID'),
            'pm_formula_header_id' => Yii::t('app', 'Pm Formula Header ID'),
            'line_no' => Yii::t('app', 'Line No'),
            'line_type' => Yii::t('app', 'Line Type'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'description' => Yii::t('app', 'Description'),
            'cost_allocation' => Yii::t('app', 'Cost Allocation'),
            'scale_type' => Yii::t('app', 'Scale Type'),
            'yield_type' => Yii::t('app', 'Yield Type'),
            'byproduct_type' => Yii::t('app', 'Byproduct Type'),
            'consumption_type' => Yii::t('app', 'Consumption Type'),
            'phantom_type' => Yii::t('app', 'Phantom Type'),
            'required_qty' => Yii::t('app', 'Required Qty'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
