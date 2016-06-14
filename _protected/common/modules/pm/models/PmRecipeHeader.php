<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_recipe_header}}".
 *
 * @property string $pm_recipe_header_id
 * @property integer $org_id
 * @property string $recipe_name
 * @property string $pm_formula_header_id
 * @property integer $pm_process_routing_header_id
 * @property string $revision
 * @property integer $item_id_m
 * @property string $status
 * @property string $recipe_type
 * @property string $description
 * @property integer $owner_employee_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmRecipeHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_recipe_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'recipe_name', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'pm_process_routing_header_id', 'item_id_m', 'owner_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['recipe_name', 'recipe_type'], 'string', 'max' => 25],
            [['pm_formula_header_id'], 'string', 'max' => 15],
            [['revision', 'status'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'recipe_name'], 'unique', 'targetAttribute' => ['org_id', 'recipe_name'], 'message' => 'The combination of Org ID and Recipe Name has already been taken.'],
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
            'revision' => Yii::t('app', 'Revision'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'status' => Yii::t('app', 'Status'),
            'recipe_type' => Yii::t('app', 'Recipe Type'),
            'description' => Yii::t('app', 'Description'),
            'owner_employee_id' => Yii::t('app', 'Owner Employee ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
