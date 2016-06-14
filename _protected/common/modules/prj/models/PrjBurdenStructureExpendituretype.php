<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_structure_expendituretype}}".
 *
 * @property string $prj_burden_structure_expendituretype_id
 * @property integer $prj_burden_structure_header_id
 * @property integer $prj_expenditure_type_id
 * @property string $description
 * @property integer $burden_cost_base_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenStructureExpendituretype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_structure_expendituretype}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_burden_structure_header_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_burden_structure_header_id', 'prj_expenditure_type_id', 'burden_cost_base_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['prj_burden_structure_header_id', 'prj_expenditure_type_id'], 'unique', 'targetAttribute' => ['prj_burden_structure_header_id', 'prj_expenditure_type_id'], 'message' => 'The combination of Prj Burden Structure Header ID and Prj Expenditure Type ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_structure_expendituretype_id' => Yii::t('app', 'Prj Burden Structure Expendituretype ID'),
            'prj_burden_structure_header_id' => Yii::t('app', 'Prj Burden Structure Header ID'),
            'prj_expenditure_type_id' => Yii::t('app', 'Prj Expenditure Type ID'),
            'description' => Yii::t('app', 'Description'),
            'burden_cost_base_id' => Yii::t('app', 'Burden Cost Base ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
