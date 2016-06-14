<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_recipe_material_line}}".
 *
 * @property string $pm_recipe_material_line_id
 * @property integer $pm_recipe_material_header_id
 * @property integer $step
 * @property integer $pm_formula_ingredient_id
 * @property string $description
 * @property integer $uom_id
 * @property string $quantity
 * @property integer $pm_process_routing_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmRecipeMaterialLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_recipe_material_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_recipe_material_header_id', 'step', 'created_by', 'last_update_by'], 'required'],
            [['pm_recipe_material_header_id', 'step', 'pm_formula_ingredient_id', 'uom_id', 'pm_process_routing_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_recipe_material_line_id' => Yii::t('app', 'Pm Recipe Material Line ID'),
            'pm_recipe_material_header_id' => Yii::t('app', 'Pm Recipe Material Header ID'),
            'step' => Yii::t('app', 'Step'),
            'pm_formula_ingredient_id' => Yii::t('app', 'Pm Formula Ingredient ID'),
            'description' => Yii::t('app', 'Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'pm_process_routing_line_id' => Yii::t('app', 'Pm Process Routing Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
