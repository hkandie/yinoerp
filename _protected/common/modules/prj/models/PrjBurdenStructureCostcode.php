<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_structure_costcode}}".
 *
 * @property string $prj_burden_structure_costcode_id
 * @property integer $prj_burden_structure_header_id
 * @property integer $burden_cost_code_id
 * @property string $description
 * @property integer $burden_cost_base_id
 * @property integer $priority
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenStructureCostcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_structure_costcode}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_burden_structure_header_id', 'burden_cost_code_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_burden_structure_header_id', 'burden_cost_code_id', 'burden_cost_base_id', 'priority', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['prj_burden_structure_header_id', 'burden_cost_code_id', 'burden_cost_base_id'], 'unique', 'targetAttribute' => ['prj_burden_structure_header_id', 'burden_cost_code_id', 'burden_cost_base_id'], 'message' => 'The combination of Prj Burden Structure Header ID, Burden Cost Code ID and Burden Cost Base ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_structure_costcode_id' => Yii::t('app', 'Prj Burden Structure Costcode ID'),
            'prj_burden_structure_header_id' => Yii::t('app', 'Prj Burden Structure Header ID'),
            'burden_cost_code_id' => Yii::t('app', 'Burden Cost Code ID'),
            'description' => Yii::t('app', 'Description'),
            'burden_cost_base_id' => Yii::t('app', 'Burden Cost Base ID'),
            'priority' => Yii::t('app', 'Priority'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
