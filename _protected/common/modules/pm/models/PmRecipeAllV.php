<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_recipe_all_v}}".
 *
 * @property string $pm_recipe_header_id
 * @property integer $org_id
 * @property string $recipe_name
 * @property string $pm_formula_header_id
 * @property integer $pm_process_routing_header_id
 * @property integer $item_id_m
 * @property string $formula_name
 * @property string $formula_description
 * @property string $routing_name
 * @property string $routing_description
 * @property string $item_number
 * @property string $item_description
 * @property string $org
 */
class PmRecipeAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_recipe_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_recipe_header_id', 'org_id', 'pm_process_routing_header_id', 'item_id_m'], 'integer'],
            [['org_id', 'recipe_name', 'formula_name', 'routing_name', 'org'], 'required'],
            [['recipe_name', 'routing_name'], 'string', 'max' => 25],
            [['pm_formula_header_id'], 'string', 'max' => 15],
            [['formula_name', 'item_number', 'org'], 'string', 'max' => 50],
            [['formula_description', 'item_description'], 'string', 'max' => 256],
            [['routing_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_recipe_header_id' => Yii::t('app', 'Pm Recipe Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'recipe_name' => Yii::t('app', 'Recipe Name'),
            'pm_formula_header_id' => Yii::t('app', 'Pm Formula Header ID'),
            'pm_process_routing_header_id' => Yii::t('app', 'Pm Process Routing Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'formula_name' => Yii::t('app', 'Formula Name'),
            'formula_description' => Yii::t('app', 'Formula Description'),
            'routing_name' => Yii::t('app', 'Routing Name'),
            'routing_description' => Yii::t('app', 'Routing Description'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'org' => Yii::t('app', 'Org'),
        ];
    }
}
