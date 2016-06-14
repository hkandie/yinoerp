<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_expenditure}}".
 *
 * @property string $prj_burden_expenditure_id
 * @property integer $prj_expenditure_line_id
 * @property integer $prj_burden_cost_base_id
 * @property integer $prj_burden_costcode_id
 * @property integer $prj_expenditure_type_header_id
 * @property string $description
 * @property integer $prj_burden_list_header_id
 * @property string $expenditure_date
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property integer $prj_burden_structure_header_id
 * @property string $multiplier
 * @property string $burden_value
 * @property string $burden_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenExpenditure extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_expenditure}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_expenditure_line_id', 'prj_burden_costcode_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_expenditure_line_id', 'prj_burden_cost_base_id', 'prj_burden_costcode_id', 'prj_expenditure_type_header_id', 'prj_burden_list_header_id', 'prj_project_header_id', 'prj_project_line_id', 'prj_burden_structure_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['expenditure_date', 'creation_date', 'last_update_date'], 'safe'],
            [['multiplier', 'burden_value', 'burden_amount'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['prj_expenditure_line_id', 'prj_burden_costcode_id'], 'unique', 'targetAttribute' => ['prj_expenditure_line_id', 'prj_burden_costcode_id'], 'message' => 'The combination of Prj Expenditure Line ID and Prj Burden Costcode ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_expenditure_id' => Yii::t('app', 'Prj Burden Expenditure ID'),
            'prj_expenditure_line_id' => Yii::t('app', 'Prj Expenditure Line ID'),
            'prj_burden_cost_base_id' => Yii::t('app', 'Prj Burden Cost Base ID'),
            'prj_burden_costcode_id' => Yii::t('app', 'Prj Burden Costcode ID'),
            'prj_expenditure_type_header_id' => Yii::t('app', 'Prj Expenditure Type Header ID'),
            'description' => Yii::t('app', 'Description'),
            'prj_burden_list_header_id' => Yii::t('app', 'Prj Burden List Header ID'),
            'expenditure_date' => Yii::t('app', 'Expenditure Date'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_burden_structure_header_id' => Yii::t('app', 'Prj Burden Structure Header ID'),
            'multiplier' => Yii::t('app', 'Multiplier'),
            'burden_value' => Yii::t('app', 'Burden Value'),
            'burden_amount' => Yii::t('app', 'Burden Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
