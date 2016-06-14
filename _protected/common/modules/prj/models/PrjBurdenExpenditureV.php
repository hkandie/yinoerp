<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_expenditure_v}}".
 *
 * @property string $prj_burden_expenditure_id
 * @property string $project_number
 * @property string $costcode
 * @property string $costcode_description
 * @property string $cost_base
 * @property string $cost_base_description
 * @property string $burden_list
 * @property string $prj_expenditure_line_id
 * @property integer $prj_expenditure_header_id
 * @property integer $org_id
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property integer $prj_nlr_header_id
 * @property integer $prj_expenditure_type_header_id
 * @property integer $uom_id
 * @property string $quantity
 * @property string $description
 * @property integer $prj_burden_list_header_id
 * @property string $expenditure_date
 * @property integer $prj_burden_structure_header_id
 * @property integer $prj_burden_costcode_id
 * @property string $multiplier
 * @property string $burden_value
 * @property string $burden_amount
 */
class PrjBurdenExpenditureV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_expenditure_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_burden_expenditure_id', 'prj_expenditure_line_id', 'prj_expenditure_header_id', 'org_id', 'prj_project_header_id', 'prj_project_line_id', 'prj_nlr_header_id', 'prj_expenditure_type_header_id', 'uom_id', 'prj_burden_list_header_id', 'prj_burden_structure_header_id', 'prj_burden_costcode_id'], 'integer'],
            [['costcode', 'cost_base', 'burden_list', 'prj_expenditure_header_id', 'prj_expenditure_type_header_id', 'uom_id', 'quantity', 'prj_burden_costcode_id'], 'required'],
            [['quantity', 'multiplier', 'burden_value', 'burden_amount'], 'number'],
            [['expenditure_date'], 'safe'],
            [['project_number'], 'string', 'max' => 50],
            [['costcode', 'cost_base', 'burden_list'], 'string', 'max' => 25],
            [['costcode_description', 'cost_base_description', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_expenditure_id' => Yii::t('app', 'Prj Burden Expenditure ID'),
            'project_number' => Yii::t('app', 'Project Number'),
            'costcode' => Yii::t('app', 'Costcode'),
            'costcode_description' => Yii::t('app', 'Costcode Description'),
            'cost_base' => Yii::t('app', 'Cost Base'),
            'cost_base_description' => Yii::t('app', 'Cost Base Description'),
            'burden_list' => Yii::t('app', 'Burden List'),
            'prj_expenditure_line_id' => Yii::t('app', 'Prj Expenditure Line ID'),
            'prj_expenditure_header_id' => Yii::t('app', 'Prj Expenditure Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_nlr_header_id' => Yii::t('app', 'Prj Nlr Header ID'),
            'prj_expenditure_type_header_id' => Yii::t('app', 'Prj Expenditure Type Header ID'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'description' => Yii::t('app', 'Description'),
            'prj_burden_list_header_id' => Yii::t('app', 'Prj Burden List Header ID'),
            'expenditure_date' => Yii::t('app', 'Expenditure Date'),
            'prj_burden_structure_header_id' => Yii::t('app', 'Prj Burden Structure Header ID'),
            'prj_burden_costcode_id' => Yii::t('app', 'Prj Burden Costcode ID'),
            'multiplier' => Yii::t('app', 'Multiplier'),
            'burden_value' => Yii::t('app', 'Burden Value'),
            'burden_amount' => Yii::t('app', 'Burden Amount'),
        ];
    }
}
