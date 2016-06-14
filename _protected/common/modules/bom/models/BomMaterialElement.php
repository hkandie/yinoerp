<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_material_element}}".
 *
 * @property integer $bom_material_element_id
 * @property string $material_element
 * @property string $description
 * @property integer $org_id
 * @property string $status
 * @property integer $default_basis
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomMaterialElement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_material_element}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_element', 'description', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'default_basis', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['material_element', 'status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['material_element', 'org_id'], 'unique', 'targetAttribute' => ['material_element', 'org_id'], 'message' => 'The combination of Material Element and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_material_element_id' => Yii::t('app', 'Bom Material Element ID'),
            'material_element' => Yii::t('app', 'Material Element'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'default_basis' => Yii::t('app', 'Default Basis'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
