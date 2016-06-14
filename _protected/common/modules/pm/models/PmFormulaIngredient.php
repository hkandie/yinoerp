<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_formula_ingredient}}".
 *
 * @property string $pm_formula_ingredient_id
 * @property integer $pm_formula_header_id
 * @property integer $line_no
 * @property string $revision_name
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property string $quantity
 * @property string $description
 * @property integer $buffer_cb
 * @property string $scale_type
 * @property integer $contribute_yield_cb
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
class PmFormulaIngredient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_formula_ingredient}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_formula_header_id', 'line_no', 'created_by', 'last_update_by'], 'required'],
            [['pm_formula_header_id', 'line_no', 'item_id_m', 'uom_id', 'buffer_cb', 'contribute_yield_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'required_qty'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['revision_name', 'scale_type', 'byproduct_type', 'consumption_type', 'phantom_type'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 256],
            [['pm_formula_header_id', 'line_no'], 'unique', 'targetAttribute' => ['pm_formula_header_id', 'line_no'], 'message' => 'The combination of Pm Formula Header ID and Line No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_formula_ingredient_id' => Yii::t('app', 'Pm Formula Ingredient ID'),
            'pm_formula_header_id' => Yii::t('app', 'Pm Formula Header ID'),
            'line_no' => Yii::t('app', 'Line No'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'description' => Yii::t('app', 'Description'),
            'buffer_cb' => Yii::t('app', 'Buffer Cb'),
            'scale_type' => Yii::t('app', 'Scale Type'),
            'contribute_yield_cb' => Yii::t('app', 'Contribute Yield Cb'),
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
