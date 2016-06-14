<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_recipe_material_header}}".
 *
 * @property string $pm_recipe_material_header_id
 * @property string $pm_recipe_header_id
 * @property string $status
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmRecipeMaterialHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_recipe_material_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_recipe_header_id', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['pm_recipe_header_id'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['pm_recipe_header_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_recipe_material_header_id' => Yii::t('app', 'Pm Recipe Material Header ID'),
            'pm_recipe_header_id' => Yii::t('app', 'Pm Recipe Header ID'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
